<?php

namespace App\Filament\Resources\ImunResource\Pages;

use App\Filament\Resources\ImunResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateImun extends CreateRecord
{
    protected static string $resource = ImunResource::class;

    protected static ?string $title = 'Buat Imunisasi';

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
