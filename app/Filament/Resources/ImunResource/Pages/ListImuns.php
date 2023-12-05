<?php

namespace App\Filament\Resources\ImunResource\Pages;

use App\Filament\Resources\ImunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImuns extends ListRecords
{
    protected static string $resource = ImunResource::class;

    protected static ?string $title = 'Data Imunisasi';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambah'),
        ];
    }
}
