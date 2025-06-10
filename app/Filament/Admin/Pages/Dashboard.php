<?php
namespace App\Filament\Admin\Pages;

use App\Filament\Admin\Widgets\CountWidget;
use App\Filament\Admin\Widgets\SalesWidget;
use App\Filament\Admin\Widgets\TodayAds;
use App\Filament\Admin\Widgets\TodayCommentsWidget;
use App\Filament\Admin\Widgets\TodayContactUs;
use App\Filament\Admin\Widgets\TodayFeedBacks;
use App\Filament\Admin\Widgets\TodaySales;
use App\Filament\Admin\Widgets\UserSharesBarChart;
use App\Filament\Admin\Widgets\UserWinSuggestLogs;
use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Admin\Widgets\TodayUsers;
use Filament\Widgets\AccountWidget;

class Dashboard extends BaseDashboard
{
    public static function getNavigationLabel(): string
    {
        return 'داشبورد ادمین';
    }
    public  function getTitle(): string
    {
        return 'داشبورد ادمین';
    }


    public function getWidgets(): array
    {
        return [
            AccountWidget::class,
        ];
    }
}
