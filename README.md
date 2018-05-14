# Laravel Model Encryption

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## About

This package can be used by simply adding a trait to the model you want to encrypt.

## Install

Via Composer

``` bash
$ composer require famdirksen/laravel-model-encryption
```

## Usage

To use this package in your own project, you need to add the `trait` to the model. In the following example we installed Larave 5.6 and ran `php artisan make:auth` to setup authentication.

You need to use the trait, `ModelEncryption` and add the `protected $encryptable` property to your User class, this way you'll enable model encryption on your user data.

app/User.php:
``` php
<?php

namespace App;

use Famdirksen\LaravelModelEncryption\ModelEncryption;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ModelEncryption;

    protected $encryptable = [
        'name',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email info@famdirksen.nl instead of using the issue tracker.

## Credits

- [Robin Dirksen][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/famdirksen/Laravel-Model-Encryption.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Famdirksen/Laravel-Model-Encryption/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/famdirksen/Laravel-Model-Encryption.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/famdirksen/Laravel-Model-Encryption.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/famdirksen/Laravel-Model-Encryption.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/famdirksen/Laravel-Model-Encryption
[link-travis]: https://travis-ci.org/Famdirksen/Laravel-Model-Encryption
[link-scrutinizer]: https://scrutinizer-ci.com/g/famdirksen/Laravel-Model-Encryption/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/famdirksen/Laravel-Model-Encryption
[link-downloads]: https://packagist.org/packages/famdirksen/Laravel-Model-Encryption
[link-author]: https://github.com/famdirksen
[link-contributors]: ../../contributors
