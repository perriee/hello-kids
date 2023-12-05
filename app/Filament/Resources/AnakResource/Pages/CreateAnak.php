<?php

namespace App\Filament\Resources\AnakResource\Pages;

use App\Filament\Resources\AnakResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAnak extends CreateRecord
{
    protected static string $resource = AnakResource::class;

    protected static ?string $title = 'Tambah Anak';

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
