<?php

namespace App\Filament\Resources\LayananAnakResource\Pages;

use App\Filament\Resources\LayananAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLayananAnak extends CreateRecord
{
    protected static string $resource = LayananAnakResource::class;

    // protected function mutateFormDataBeforeCreate(array $data): array
    // {
    //     dd($data);

    //     return $data;
    // }

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
