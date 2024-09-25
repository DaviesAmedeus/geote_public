<?php

namespace App\Filament\Staff\Resources\BlogResource\Pages;

use App\Filament\Staff\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

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
