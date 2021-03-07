<?php

namespace Antron\Ivsi;

use Illuminate\Support\ServiceProvider;

class IvsiServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/ivsi.php' => config_path('ivsi.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\IvsiDump::class,
                Commands\IvsiRestore::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ivsi', function($app) {
            return new Ivsi;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ivsi'];
    }

}
