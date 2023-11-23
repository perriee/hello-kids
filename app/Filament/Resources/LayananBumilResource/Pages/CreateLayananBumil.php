<?php

namespace App\Filament\Resources\LayananBumilResource\Pages;

use App\Filament\Resources\LayananBumilResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLayananBumil extends CreateRecord
{
    protected static string $resource = LayananBumilResource::class;

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
