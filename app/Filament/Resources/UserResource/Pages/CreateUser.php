<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

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
