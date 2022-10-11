# Package to maintain translations

...

## Installation and usage

This package requires PHP 7.0 and Laravel 9.0 or higher. Install the package by running the following command in your console;

``` bash
composer require sqits/laravel-babelfish
```

You can publish the config file with:

``` bash
php artisan vendor:publish --provider="Sqits\Babelfish\BabelfishServiceProvider" --tag="config"
```
a
This is the contents of the published config file:

``` php
return [

];
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security-related issues, please [email](mailto:info@sqits.nl) to info@sqits.nl instead of using the issue tracker.

## Credits

- [Sqits](https://github.com/sqits)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
