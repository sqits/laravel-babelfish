<?php

namespace Sqits\Babelfish;

use Illuminate\Support\ServiceProvider;

class BabelfishServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/babelfish.php' => config_path('babelfish.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/babelfish.php', 'babelfish'
        );
    }
}
