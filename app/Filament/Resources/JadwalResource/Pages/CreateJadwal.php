<?php

namespace App\Filament\Resources\JadwalResource\Pages;

use App\Filament\Resources\JadwalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateJadwal extends CreateRecord
{
    protected static string $resource = JadwalResource::class;

    protected static ?string $title = 'Tambah Jadwal';

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['admin_id'] = Auth::user('admin')->id;

        // dd($data);

        return $data;
    }

    protected function getRedirectUrl(): string
    {
        $resource = static::getResource();

        return $resource::getUrl('index');
    }
}
