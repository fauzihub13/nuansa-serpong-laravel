<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Room;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('User', User::count())->description('Jumlah Admin saat ini'),
            Stat::make('Room', Room::count())->description('Jumlah kamar saat ini'),
            Stat::make('Article', Article::count())->description('Jumlah artikel saat ini'),

        ];
    }
}
