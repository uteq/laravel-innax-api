<?php

namespace Uteq\LaravelInnaxApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Uteq\LaravelInnaxApi\Commands\LaravelInnaxApiCommand;

class LaravelInnaxApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-innax-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-innax-api_table')
            ->hasCommand(LaravelInnaxApiCommand::class);
    }
}
