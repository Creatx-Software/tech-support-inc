<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\BlogCategoryResource;
use App\Filament\Resources\BlogResource;
use App\Filament\Resources\ContactResource;
use App\Filament\Resources\FaqResource;
use App\Filament\Resources\GalleryResource;
use App\Filament\Resources\PricingPlanResource;
use App\Filament\Resources\ServiceResource;
use App\Filament\Resources\TestimonialResource;
use Filament\Widgets\Widget;

class QuickActionsWidget extends Widget
{
    protected static string $view = 'filament.widgets.quick-actions-widget';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 0;

    public function getActions(): array
    {
        return [
            [
                'label' => 'New Blog Post',
                'icon' => 'heroicon-o-newspaper',
                'url' => BlogResource::getUrl('create'),
            ],
            [
                'label' => 'New Service',
                'icon' => 'heroicon-o-briefcase',
                'url' => ServiceResource::getUrl('create'),
            ],
            [
                'label' => 'New Testimonial',
                'icon' => 'heroicon-o-star',
                'url' => TestimonialResource::getUrl('create'),
            ],
            [
                'label' => 'New FAQ',
                'icon' => 'heroicon-o-question-mark-circle',
                'url' => FaqResource::getUrl('create'),
            ],
            [
                'label' => 'New Gallery Image',
                'icon' => 'heroicon-o-photo',
                'url' => GalleryResource::getUrl('create'),
            ],
            [
                'label' => 'New Pricing Plan',
                'icon' => 'heroicon-o-currency-dollar',
                'url' => PricingPlanResource::getUrl('create'),
            ],
            [
                'label' => 'View Messages',
                'icon' => 'heroicon-o-envelope',
                'url' => ContactResource::getUrl('index'),
            ],
            [
                'label' => 'Blog Categories',
                'icon' => 'heroicon-o-folder',
                'url' => BlogCategoryResource::getUrl('index'),
            ],
        ];
    }
}
