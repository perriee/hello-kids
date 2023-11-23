<?php

namespace App\Filament\Resources\LayananBumilResource\Pages;

use App\Filament\Resources\LayananBumilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLayananBumils extends ListRecords
{
    protected static string $resource = LayananBumilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
