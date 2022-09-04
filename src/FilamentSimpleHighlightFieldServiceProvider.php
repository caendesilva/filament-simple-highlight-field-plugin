<?php

namespace Desilva\FilamentSimpleHighlightField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentSimpleHighlightFieldServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-simple-highlight-field-styles' => __DIR__.'/../resources/assets/default.min.css',
    ];

    protected array $scripts = [
        'filament-simple-highlight-field-scripts' => __DIR__.'/../resources/assets/highlight.min.js',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('filament-simple-highlight-field')
            ->hasConfigFile()
            ->hasViews();

        if (config('filament-simple-highlight-field.theme')) {
            $this->styles = [];
        }
    }
}
