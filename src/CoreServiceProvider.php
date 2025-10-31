<?php

namespace Incadev\Core;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Incadev\Core\Commands\CoreCommand;

class CoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('core')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(CoreCommand::class)
            ->discoversMigrations()
            ->runsMigrations();
    }

    public function registeringPackage(): void
    {
        $this->app->register(\Laravel\Sanctum\SanctumServiceProvider::class);
        $this->app->register(\Spatie\Permission\PermissionServiceProvider::class);
    }
}
