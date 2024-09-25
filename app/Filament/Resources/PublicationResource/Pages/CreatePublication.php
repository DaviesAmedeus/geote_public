<?php

namespace App\Filament\Resources\PublicationResource\Pages;

use App\Filament\Resources\PublicationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePublication extends CreateRecord
{
    protected static string $resource = PublicationResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Automatically assign the current authenticated user's ID before creating
        $data['user_id'] = auth()->id();
        $data['category_id'] = 2;

        return $data;
    }
}
