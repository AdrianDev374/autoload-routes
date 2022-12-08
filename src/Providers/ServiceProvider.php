<?php

declare(strict_types=1);

namespace Adriandev374\AutoloadRoutes\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

final class ServiceProvider extends LaravelServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(base_path('olio/test.php'));
    }

    public function boot(): void
    {
        //
    }
}
