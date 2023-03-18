<?php

declare(strict_types=1);

namespace kingzamzon\Ahref\Providers;

use AhrefContract;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes(
            paths: [__DIR__ . '../../config/ahref.php'],
            groups: 'ahref'
        );
    }

    public function register(): void
    {
        $this->app->singleton(
            abstract: AhrefContract::class
        );
    }
}
