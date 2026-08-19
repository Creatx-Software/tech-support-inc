<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    public function mount(int | string $record): void
    {
        parent::mount($record);

        $this->record->markAsRead(auth()->user());
    }

    protected function getHeaderActions(): array
    {
        return [];
    }
}
