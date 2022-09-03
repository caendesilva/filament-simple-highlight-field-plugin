# desilva/filament-simple-highlight-field

## Adds a simple read-only Highlight.js pseudo-field to FilamentPHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/desilva/filament-simple-highlight-field.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-simple-highlight-field)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/desilva/filament-simple-highlight-field/run-tests?label=tests)](https://github.com/desilva/filament-simple-highlight-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/desilva/filament-simple-highlight-field/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/desilva/filament-simple-highlight-field/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/desilva/filament-simple-highlight-field.svg?style=flat-square)](https://packagist.org/packages/desilva/filament-simple-highlight-field)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require desilva/filament-simple-highlight-field
```


You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-simple-highlight-field-config"
```

This is the contents of the published config file:

```php
return [
	//
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-simple-highlight-field-views"
```

## Usage

```php
$filamentSimpleHighlightField = new Desilva\FilamentSimpleHighlightField();
echo $filamentSimpleHighlightField->echoPhrase('Hello, Desilva!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Caen De Silva](https://github.com/caendesilva)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
