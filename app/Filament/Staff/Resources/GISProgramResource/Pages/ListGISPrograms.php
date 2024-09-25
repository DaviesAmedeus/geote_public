<?php

namespace App\Filament\Staff\Resources\GISProgramResource\Pages;

use App\Filament\Staff\Resources\GISProgramResource;
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
