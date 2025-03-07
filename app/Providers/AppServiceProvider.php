<?php

namespace App\Providers;

use App\Models\ProductSubscription;
use App\Observers\ProductSubscriptionObserver;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        ProductSubscription::observe(ProductSubscriptionObserver::class);
        if (config('app.env') == 'production') {
            URL::forceScheme('https');
        }
    }
}
