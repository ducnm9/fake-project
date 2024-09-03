<?php

namespace App\Providers;

use App\Contracts\PodcastServiceContract;
use App\Proxy\PodcastServiceProxy;
use App\Services\PodcastService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->singleton(PodcastServiceContract::class, function () {
            return new PodcastServiceProxy(new PodcastService);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
