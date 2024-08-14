# PHP Upgrade uide

Set composer php version

```sh
composer require php:^8.3 --with-all-dependencies
```

If conflicts occur check the conflicting packages to see if there are new releases and update the `composer.json` file with the compatible versions (including the new php version) and then update. Note that there may be breaking changes in the dependent packages that will require updates and testing

```sh
composer update --with-all-dependencies
```

## Conflict Resolution Example

```
composer require php:^8.3 --with-all-dependencies
./composer.json has been updated
Running composer update php --with-all-dependencies
Loading composer repositories with package information
Updating dependencies
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - phpro/soap-client is locked to version 2.4.2 and an update of this package was not requested.
    - phpro/soap-client 2.4.2 requires php ~8.1.0 || ~8.2.0 -> your php version (8.3.10) does not satisfy that requirement.


Installation failed, reverting ./composer.json and ./composer.lock to their original content.
```

composer.json before:

```json
{
    "require": {
        "php": "^8.1",
        "guzzlehttp/guzzle": "^7.2",
        "illuminate/contracts": "^9.0|^10.0",
        "phpro/soap-client": "^2.4",
        "spatie/laravel-package-tools": "^1.13.0"
    },
    "require-dev": {
        "laravel/pint": "^1.0",
        "nunomaduro/collision": "^6.0",
        "orchestra/testbench": "^7.0|^8.0",
        "pestphp/pest": "^1.21",
        "pestphp/pest-plugin-laravel": "^1.4",
        "phpunit/phpunit": "^9.5|^10.0",
        "spatie/laravel-ray": "^1.26"
    }
}
```

composer.json after:

```json
{
    "require": {
        "php": "^8.3",
        "guzzlehttp/guzzle": "^7.2",
        "illuminate/contracts": "^10.0|^11.0",
        "phpro/soap-client": "^3.0",
        "spatie/laravel-package-tools": "^1.13.0"
    },
    "require-dev": {
        "laravel/pint": "^1.0",
        "orchestra/testbench": "^8.0|^9.0",
        "pestphp/pest": "^2.0",
        "pestphp/pest-plugin-laravel": "^2.0",
        "spatie/laravel-ray": "^1.26"
    }
}
```
