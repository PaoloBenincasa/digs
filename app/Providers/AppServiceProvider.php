<?php

namespace App\Providers;

use App\Models\Genre;
use App\Models\Format;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
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
        if (Schema::hasTable('genres')) {
            View::share('genres', Genre::orderBy('name')->get());
        }

        if (Schema::hasTable('formats')) {
            View::share('formats', Format::orderBy('name')->get());
        }
    }
}
