<?php

namespace Desilva\FilamentSimpleHighlightField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentSimpleHighlightFieldServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-simple-highlight-field')
            ->hasConfigFile()
            ->hasViews();
    }
}
