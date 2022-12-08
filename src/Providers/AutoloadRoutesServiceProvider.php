<?php

declare(strict_types=1);

namespace Adriandev374\AutoloadRoutes\Providers;

use Illuminate\Support\ServiceProvider;

class AutoloadRoutesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->loadRoutesFrom(base_path('olio/test.php'));
    }

    public function boot(): void
    {

    }
}
