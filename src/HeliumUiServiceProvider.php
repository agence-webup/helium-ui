<?php

namespace Webup\HeliumUi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Webup\HeliumUi\Commands\HeliumUiCommand;

class HeliumUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('helium-ui')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_helium-ui_table')
            ->hasCommand(HeliumUiCommand::class);
    }
}
