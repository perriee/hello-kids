<?php

namespace App\Filament\Widgets;

use App\Models\Anak;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Ibu', User::query()->count()),
            Stat::make('Total Ibu Hamil', User::where('is_pregnant', 1)->count()),
            Stat::make('Total Anak', Anak::query()->count()),
        ];
    }
}
