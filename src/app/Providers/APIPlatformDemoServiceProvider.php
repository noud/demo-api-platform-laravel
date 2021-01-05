<?php

namespace API\Platform\Demo\Providers;

use Illuminate\Support\ServiceProvider;

class APIPlatformDemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
    }
}
