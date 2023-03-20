# A collection of macros for Collections.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bubbaops/macro-collection.svg?style=flat-square)](https://packagist.org/packages/bubbaops/macro-collection)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bubbaops/macro-collection/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bubbaops/macro-collection/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bubbaops/macro-collection/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bubbaops/macro-collection/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bubbaops/macro-collection.svg?style=flat-square)](https://packagist.org/packages/bubbaops/macro-collection)

A collection of macros that we regularly use in development, gathered in one convenient spot.

## Installation

You can install the package via composer:

```bash
composer require bubbaops/macro-collection
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="macro-collection-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="macro-collection-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="macro-collection-views"
```

## Usage

```php
$macroCollection = new BubbaOps\MacroCollection();
echo $macroCollection->echoPhrase('Hello, BubbaOps!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Bubba Hines](https://github.com/BubbaOps)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
