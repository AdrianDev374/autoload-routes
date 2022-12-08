<?php

declare(strict_types=1);

namespace Adriandev374\AutoloadRoutes;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Symfony\Component\Finder\Finder;

class ServiceProvider extends LaravelServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '../../config/autoload-routes.php',
            'autoload-routes'
        );
    }

    public function boot(): void
    {
        $this->publishingFiles();
        $this->loadRoutes();
    }

    private function publishingFiles(): void
    {
        $this->publishes([
            __DIR__ . '../../config/autoload-routes.php' => config_path('autoload-routes.php'),
        ]);
    }

    private function loadRoutes(): void
    {
        $depth = config('autoload-routes.depth');
        $paths = config('autoload-routes.paths');
        $groupsMiddlewares = array_keys($paths);

        foreach ($groupsMiddlewares as $group) {
            $groupPaths = is_array($paths[$group]) ? $paths[$group] : [$paths[$group]];

            if (count($groupPaths) <= 0) {
                continue;
            }

            $finder = Finder::create()
                ->files()->name('*.php')
                ->depth('< ' . $depth)
                ->in($groupPaths);

            foreach ($finder->getIterator() as $file) {
                Route::middleware($group)->group($file->getRealPath());
            }
        }
    }
}
