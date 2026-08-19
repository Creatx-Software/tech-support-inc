<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PricingPlanResource\Pages;
use App\Models\PricingPlan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PricingPlanResource extends Resource
{
    protected static ?string $model = PricingPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-pound';

    protected static ?string $navigationGroup = 'Frontend Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Plan Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Set $set) {
                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Auto-generated from the title. Edit to customize.'),

                        Forms\Components\TextInput::make('badge')
                            ->maxLength(50)
                            ->helperText('Small label shown on the plan card, e.g. "Flexible", "Most Popular".'),

                        Forms\Components\TextInput::make('price_amount')
                            ->numeric()
                            ->prefix('£')
                            ->helperText('Leave empty to display "Varies" instead of a fixed price.'),

                        Forms\Components\TextInput::make('price_period')
                            ->maxLength(100)
                            ->helperText('e.g. "per user / month" or "per task / per hour"'),

                        Forms\Components\Textarea::make('description')
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->directory('pricing')
                            ->imageEditor()
                            ->helperText('Used on the homepage pricing section.')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Features')
                    ->schema([
                        Forms\Components\Repeater::make('features')
                            ->label('Features')
                            ->schema([
                                Forms\Components\TextInput::make('text')
                                    ->label('Feature')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpan(3),

                                Forms\Components\Toggle::make('included')
                                    ->label('Included')
                                    ->default(true)
                                    ->columnSpan(1),
                            ])
                            ->columns(4)
                            ->addActionLabel('Add feature')
                            ->reorderable()
                            ->collapsible(),
                    ]),

                Forms\Components\Section::make('Status')
                    ->schema([
                        Forms\Components\Toggle::make('is_popular')
                            ->label('Most Popular'),

                        Forms\Components\Toggle::make('is_feature')
                            ->label('Show on Homepage')
                            ->default(true),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Active')
                            ->default(true),
                    ])
                    ->columns(3),

                Forms\Components\Section::make('SEO Meta')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),

                        Forms\Components\Textarea::make('meta_description')
                            ->rows(3)
                            ->maxLength(500),

                        Forms\Components\TextInput::make('meta_keywords')
                            ->maxLength(255)
                            ->helperText('Comma separated keywords'),
                    ])
                    ->columns(1)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('price_amount')
                    ->label('Price')
                    ->formatStateUsing(fn ($state) => $state !== null ? '£'.number_format((float) $state, 2) : 'Varies'),

                Tables\Columns\IconColumn::make('is_popular')
                    ->boolean()
                    ->label('Popular'),

                Tables\Columns\IconColumn::make('is_feature')
                    ->boolean()
                    ->label('Homepage'),

                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Active'),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active'),
                Tables\Filters\TernaryFilter::make('is_feature'),
                Tables\Filters\TernaryFilter::make('is_popular'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPricingPlans::route('/'),
            'create' => Pages\CreatePricingPlan::route('/create'),
            'edit' => Pages\EditPricingPlan::route('/{record}/edit'),
        ];
    }
}
