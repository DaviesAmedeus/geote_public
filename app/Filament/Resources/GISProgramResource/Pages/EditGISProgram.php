<?php

namespace App\Filament\Resources\GISProgramResource\Pages;

use App\Filament\Resources\GISProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGISProgram extends EditRecord
{
    protected static string $resource = GISProgramResource::class;

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
