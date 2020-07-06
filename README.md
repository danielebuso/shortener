# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kodesire/laravel-shortener.svg?style=flat-square)](https://packagist.org/packages/kodesire/laravel-shortener)
[![Build Status](https://img.shields.io/travis/kodesire/laravel-shortener/master.svg?style=flat-square)](https://travis-ci.org/kodesire/laravel-shortener)
[![Quality Score](https://img.shields.io/scrutinizer/g/kodesire/laravel-shortener.svg?style=flat-square)](https://scrutinizer-ci.com/g/kodesire/laravel-shortener)
[![Total Downloads](https://img.shields.io/packagist/dt/kodesire/laravel-shortener.svg?style=flat-square)](https://packagist.org/packages/kodesire/laravel-shortener)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require danielebuso/shortener
```

## Usage

``` php
Route::domain('myapp.com')->group(function () {
    Route::get('{short_link}', 'ShortLinkController@resolve')->name('short_link')
});
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email daniele@kodesire.com instead of using the issue tracker.

## Credits

- [Daniele Buso](https://github.com/danielebuso)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
