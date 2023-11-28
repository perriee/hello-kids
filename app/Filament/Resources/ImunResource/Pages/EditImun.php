<?php

namespace App\Filament\Resources\ImunResource\Pages;

use App\Filament\Resources\ImunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImun extends EditRecord
{
    protected static string $resource = ImunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
