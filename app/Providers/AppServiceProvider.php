<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use App\Helpers\RoleBasedRedirectHelper;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

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

        RedirectIfAuthenticated::redirectUsing(function ($request) {
            $user = Auth::user();

            $helper = new RoleBasedRedirectHelper($user);

            return  $helper->getDashboardRoute($user);
        });
    }
}
