<?php

namespace App\Providers;

use App\Models\ReferralCode;
use App\Models\User;
use App\Observers\ReferralCodeObserver;
use App\Observers\UserObserver;
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
        ReferralCode::observe(ReferralCodeObserver::class);

        User::observe(UserObserver::class);

    }
}
