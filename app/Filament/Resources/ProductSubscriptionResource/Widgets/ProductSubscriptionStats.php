<?php

namespace App\Filament\Resources\ProductSubscriptionResource\Widgets;

use App\Models\ProductSubscription;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductSubscriptionStats extends BaseWidget
{
    protected function getStats(): array
    {
        $totalTransactions = ProductSubscription::count();
        $approvedTransactions = ProductSubscription::where('is_paid', true)->count();
        $totalRevenue = ProductSubscription::where('is_paid', true)->sum('total_amount');

        return [
            Stat::make('Total Transaction', $totalTransactions)
                ->description('Semua Transaksi')
                ->descriptionIcon('heroicon-o-currency-dollar'),

            Stat::make('Approved Transaction', $approvedTransactions)
                ->description('Transaksi yang Sudah di Approved')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Total Revenue', 'IDR ' . number_format($totalRevenue))
                ->description('Total Pendapatan dari Transaksi Approved ')
                ->descriptionIcon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }
}
