<?php

namespace App\Filament\Resources\JenisImunResource\Pages;

use App\Filament\Resources\JenisImunResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisImun extends EditRecord
{
    protected static string $resource = JenisImunResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
