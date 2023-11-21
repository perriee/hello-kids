<?php

namespace App\Filament\Resources\JenisImunResource\Pages;

use App\Filament\Resources\JenisImunResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJenisImun extends CreateRecord
{
    protected static string $resource = JenisImunResource::class;

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
