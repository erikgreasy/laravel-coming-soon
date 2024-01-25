# Coming soon page for Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/erikgreasy/laravel-coming-soon.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/laravel-coming-soon)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/erikgreasy/laravel-coming-soon/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/erikgreasy/laravel-coming-soon/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/erikgreasy/laravel-coming-soon/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/erikgreasy/laravel-coming-soon/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/erikgreasy/laravel-coming-soon.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/laravel-coming-soon)

Add coming soon page to your Laravel action without hassle.

## Installation

You can install the package via composer:

```bash
composer require erikgreasy/laravel-coming-soon
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-coming-soon-config"
```

This is the contents of the published config file:

```php
return [
    'enabled' => env('COMING_SOON_ENABLED', false),
    'route' => 'coming-soon',
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-coming-soon-views"
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

Please if you find any security vulnerability, send it to erik@greasy.dev and do not submit to issues.

## Credits

- [Erik Masny](https://github.com/erikgreasy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
