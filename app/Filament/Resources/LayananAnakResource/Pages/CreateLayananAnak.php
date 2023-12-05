<?php

namespace App\Filament\Resources\LayananAnakResource\Pages;

use App\Filament\Resources\LayananAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLayananAnak extends CreateRecord
{
    protected static string $resource = LayananAnakResource::class;

    protected static ?string $title = 'Tambah Layanan Anak';

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
