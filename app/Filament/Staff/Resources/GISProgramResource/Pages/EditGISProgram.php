<?php

namespace App\Filament\Staff\Resources\GISProgramResource\Pages;

use App\Filament\Staff\Resources\GISProgramResource;
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
