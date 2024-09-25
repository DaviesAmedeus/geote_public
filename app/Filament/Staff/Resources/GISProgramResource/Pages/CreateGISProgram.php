<?php

namespace App\Filament\Staff\Resources\GISProgramResource\Pages;

use App\Filament\Staff\Resources\GISProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGISProgram extends CreateRecord
{
    protected static string $resource = GISProgramResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Automatically assign the current authenticated user's ID before creating
        $data['user_id'] = auth()->id();
        $data['category_id'] = 3;

        return $data;
    }
}
