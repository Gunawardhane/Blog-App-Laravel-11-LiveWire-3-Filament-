<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count()),
            Stat::make('Total Editors', User::where('role', User::ROLE_EDITOR)->count()),
            Stat::make('Total Admins', User::where('role', User::ROLE_ADMIN)->count()),

            // Stat::make('Total Posts', Post::count()),
            // Stat::make('Total Comments', Comment::count()),
        ];
    }
}
