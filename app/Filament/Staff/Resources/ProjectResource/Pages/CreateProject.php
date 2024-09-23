<?php

namespace App\Filament\Staff\Resources\ProjectResource\Pages;

use App\Filament\Staff\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Automatically assign the current authenticated user's ID before creating
        $data['user_id'] = auth()->id();
        $data['category_id'] = 2;

        return $data;
    }
}
