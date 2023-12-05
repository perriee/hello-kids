<?php

namespace App\Filament\Resources\LayananBumilResource\Pages;

use App\Filament\Resources\LayananBumilResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLayananBumil extends CreateRecord
{
    protected static string $resource = LayananBumilResource::class;

    protected static ?string $title = 'Buat Layanan Ibu Hamil';

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
