<?php

namespace App\Filament\Resources\ImunResource\Pages;

use App\Filament\Resources\ImunResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateImun extends CreateRecord
{
    protected static string $resource = ImunResource::class;

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
