# Laravel Link Shortener

[![Latest Version on Packagist](https://img.shields.io/packagist/v/danielebuso/shortener.svg?style=flat-square)](https://packagist.org/packages/danielebuso/shortener)
[![Build Status](https://img.shields.io/travis/danielebuso/shortener/master.svg?style=flat-square)](https://travis-ci.org/danielebuso/shortener)
[![Quality Score](https://img.shields.io/scrutinizer/g/danielebuso/shortener.svg?style=flat-square)](https://scrutinizer-ci.com/g/danielebuso/shortener)
[![Total Downloads](https://img.shields.io/packagist/dt/danielebuso/shortener.svg?style=flat-square)](https://packagist.org/packages/danielebuso/shortener)

Local link shortener for Laravel 7

## Installation

You can install the package via composer:

```bash
composer require danielebuso/shortener
```

Publish the migration and migrate

``` bash
php artisan vendor:publish --tag=migrations
php artisan migrate
```

## Usage

``` php
$short_link = Shortener::shorten('https://example.com/my-very-long-link');

$short_link->short_url // Eg. https://myapp.com/l/JedO8TSC
```

## Customize routing

To customize the link routing add the following to your routes and customize as you wish

``` php
Route::domain('mylink.com')->group(function () {
    Route::get('{short_link}', 'ShortLinkController@resolve')->name('short_link');
});

// Then in controller
$short_link->short_url // Eg. https://mylink.com/JedO8TSC
```

## Configuration

To customize the config either use the environment variables or publish the configuration file

``` bash
php artisan vendor:publish --tag=config
```

| Config      | .env                  | Default | Description                                         |
|-------------|-----------------------|---------|-----------------------------------------------------|
| link_length | SHORTENER_LINK_LENGTH | 8       | Number of random characters used in link generation |

### Testing

``` bash
composer test
```

### Upcoming features

- [X] Custom validity (nbf, exp)
- [ ] Link analitycs (times opened)
- [ ] Real tests

### Security

If you discover any security related issues, please email daniele@kodesire.com instead of using the issue tracker.

## Credits

- [Daniele Buso](https://github.com/danielebuso)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
