# Helium UI components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webup/helium-ui.svg?style=flat-square)](https://packagist.org/packages/webup/helium-ui)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/webup/helium-ui/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/webup/helium-ui/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/webup/helium-ui/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/webup/helium-ui/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/webup/helium-ui.svg?style=flat-square)](https://packagist.org/packages/webup/helium-ui)

Helium UI publishes reusable TALL components.

## Installation

You can install the package via composer:

```bash
composer require webup/helium-ui
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="helium-ui-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="helium-ui-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="helium-ui-views"
```

## Usage

```php
$heliumUi = new Webup\HeliumUi();
echo $heliumUi->echoPhrase('Hello, Webup!');
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

- [Agence Webup](https://github.com/agence-webup)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
