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
            Stat::make('User', User::count()),
            Stat::make('Room', Room::count()),
            Stat::make('Article', Article::count()),

        ];
    }
}
