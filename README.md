# desilva/filament-simple-highlight-field

## Adds a simple read-only Highlight.js pseudo-field to FilamentPHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/desilva/filament-simple-highlight-field.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-simple-highlight-field)
[![Total Downloads](https://img.shields.io/packagist/dt/desilva/filament-simple-highlight-field.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-simple-highlight-field)

Adds a simple form field that renders a read-only Highlight.js code block for FilamentPHP. The plugin is new and may be unstable and contain bugs. PRs and issue reports are welcome.

## Installation

You can install the package via composer:

```bash
composer require desilva/filament-simple-highlight-field
```

## Usage

Simply use the component as you'd use any other Filament field. It's especially perfect for the resource view page where it blends right in.

```php
use Desilva\FilamentSimpleHighlightField\HighlightField;

class FileResource extends Resource
{
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('path'),

                HighlightField::make('contents')
                    ->columnSpan('full'),
            ]);
    }
}
```

## Roadmap

- [x] Add option to customize the theme 
- [x] Dark mode support (doesn't work with custom theme)
- [ ] Add method chain to specify the language

## Configuration

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-simple-highlight-field-config"
```

This is the contents of the published config file:

```php
return [
    // By default, the plugin will load serve the assets from Filament. You can uncomment the following to specify
    // a custom theme that will then be loaded from the Highlight.js CDN. See https://highlightjs.org/static/demo
    // 'theme' => 'nord',
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-simple-highlight-field-views"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Contributing is pretty chill and is highly appreciated! Just send a PR and/or create an issue!

## Security Vulnerabilities

Please review my [General Security Policy](https://git.desilva.se/security/) on how to report security vulnerabilities.

## Credits

- [Caen De Silva](https://github.com/caendesilva)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
