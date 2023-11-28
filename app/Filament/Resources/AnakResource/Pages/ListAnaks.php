<?php

namespace App\Filament\Resources\AnakResource\Pages;

use App\Filament\Resources\AnakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnaks extends ListRecords
{
    protected static string $resource = AnakResource::class;

    protected static ?string $title = 'Data Anak';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah'),
        ];
    }
}
