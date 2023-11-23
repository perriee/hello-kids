<?php

namespace App\Filament\Resources\LayananAnakResource\Pages;

use App\Filament\Resources\LayananAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLayananAnaks extends ListRecords
{
    protected static string $resource = LayananAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
