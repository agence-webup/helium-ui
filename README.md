# Helium UI components

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webup/helium-ui.svg?style=flat-square)](https://packagist.org/packages/webup/helium-ui)
[![run-tests](https://github.com/agence-webup/helium-ui/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/agence-webup/helium-ui/actions/workflows/run-tests.yml)
[![Fix PHP code style issues](https://github.com/agence-webup/helium-ui/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/agence-webup/helium-ui/actions/workflows/fix-php-code-style-issues.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/webup/helium-ui.svg?style=flat-square)](https://packagist.org/packages/webup/helium-ui)

Helium UI publishes reusable TALL components.

## Installation

You can install the package via composer:

```bash
composer require webup/helium-ui
```

You can publish the views using

```bash
php artisan vendor:publish --tag="helium-ui-views"
```

## Usage

```blade
<div>
    <x-helium-ui::wip />
</div>
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
