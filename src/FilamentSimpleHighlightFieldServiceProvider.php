<?php

namespace Desilva\FilamentSimpleHighlightField;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Desilva\FilamentSimpleHighlightField\Commands\FilamentSimpleHighlightFieldCommand;

class FilamentSimpleHighlightFieldServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-simple-highlight-field')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-simple-highlight-field_table')
            ->hasCommand(FilamentSimpleHighlightFieldCommand::class);
    }
}
