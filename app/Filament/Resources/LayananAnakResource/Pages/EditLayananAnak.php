<?php

namespace App\Filament\Resources\LayananAnakResource\Pages;

use App\Filament\Resources\LayananAnakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLayananAnak extends EditRecord
{
    protected static string $resource = LayananAnakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
