<?php

namespace App\Filament\Resources\JenisImunResource\Pages;

use App\Filament\Resources\JenisImunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisImuns extends ListRecords
{
    protected static string $resource = JenisImunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
