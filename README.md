# Coming soon page for Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/erikgreasy/laravel-coming-soon.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/laravel-coming-soon)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/erikgreasy/laravel-coming-soon/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/erikgreasy/laravel-coming-soon/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/erikgreasy/laravel-coming-soon/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/erikgreasy/laravel-coming-soon/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/erikgreasy/laravel-coming-soon.svg?style=flat-square)](https://packagist.org/packages/erikgreasy/laravel-coming-soon)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-coming-soon.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-coming-soon)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require erikgreasy/laravel-coming-soon
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-coming-soon-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-coming-soon-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-coming-soon-views"
```

## Usage

```php
$laravelComingSoon = new Erikgreasy\LaravelComingSoon();
echo $laravelComingSoon->echoPhrase('Hello, Erikgreasy!');
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

- [Erik Masny](https://github.com/erikgreasy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
