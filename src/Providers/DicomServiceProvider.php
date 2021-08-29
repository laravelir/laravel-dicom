<?php

namespace Laravelir\Dicom\Providers;

use Illuminate\Support\ServiceProvider;
use Laravelir\Dicom\Facades\DicomFacade;
use Laravelir\Dicom\Console\Commands\InstallPackageCommand;

class DicomServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../../config/dicom.php", 'dicom');

        $this->registerFacades();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->registerCommands();
            $this->registerPublishes();
            $this->publishConfig();
        }
    }

    private function registerFacades()
    {
        $this->app->bind('dicom', function ($app) {
            return new DicomFacade();
        });
    }

    private function registerPublishes()
    {
        $this->publishes([
            __DIR__ . '/../../config/dicom.php' => config_path('dicom.php')
        ], 'dicom-config');
    }

    private function registerCommands()
    {
        $this->commands([
            InstallPackageCommand::class,
        ]);
    }

    public function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../../config/dicom.php' => config_path('dicom.php')
        ], 'dicom-config');
    }
}
