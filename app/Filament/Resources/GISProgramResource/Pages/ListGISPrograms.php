<?php

namespace App\Filament\Resources\GISProgramResource\Pages;

use App\Filament\Resources\GISProgramResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGISPrograms extends ListRecords
{
    protected static string $resource = GISProgramResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
