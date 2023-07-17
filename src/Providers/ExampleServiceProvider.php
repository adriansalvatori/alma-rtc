<?php

namespace VendorName\AlmaRTCPackage\Providers;

use Roots\Acorn\ServiceProvider;
use VendorName\AlmaRTCPackage\Console\AlmaRTCCommand;
use VendorName\AlmaRTCPackage\AlmaRTC;

class AlmaRTCServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('AlmaRTC', function () {
            return new AlmaRTC($this->app);
        });

        $this->mergeConfigFrom(
            __DIR__.'/../../config/alma-rtc.php',
            'alma-rtc'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/alma-rtc.php' => $this->app->configPath('alma-rtc.php'),
        ], 'config');

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views',
            'AlmaRTC',
        );

        $this->commands([
            AlmaRTCCommand::class,
        ]);

        $this->app->make('AlmaRTC');
    }
}
