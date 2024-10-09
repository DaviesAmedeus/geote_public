<?php

namespace App\Filament\Staff\Resources\PublicationResource\Pages;

use App\Filament\Staff\Resources\PublicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublication extends EditRecord
{
    protected static string $resource = PublicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Ensure the user_id is assigned when saving or updating
        $data['user_id'] = auth()->id();

        return $data;
    }
}
