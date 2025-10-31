# Core package implementing Incadev's business domain

[![Latest Version on Packagist](https://img.shields.io/packagist/v/incadev/core.svg?style=flat-square)](https://packagist.org/packages/incadev/core)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/josevasquezramos/incadev-core/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/josevasquezramos/incadev-core/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/josevasquezramos/incadev-core/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/josevasquezramos/incadev-core/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/incadev/core.svg?style=flat-square)](https://packagist.org/packages/incadev/core)

This package provides the single source of truth for the Incadev business domain, modeling the shared database schema, and Eloquent models. It ensures all projects built on this platform share the same data structure.

## Installation

You can install the package via composer:

```bash
composer require incadev/core
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="core-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="core-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="core-views"
```

## Usage

```php
$core = new Incadev\Core();
echo $core->echoPhrase('Hello, Incadev!');
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

- [Jose Vasquez Ramos](https://github.com/josevasquezramos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
