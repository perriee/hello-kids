<?php

namespace App\Filament\Resources\ImunResource\Pages;

use App\Filament\Resources\ImunResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImuns extends ListRecords
{
    protected static string $resource = ImunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
