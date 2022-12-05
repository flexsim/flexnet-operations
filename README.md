# A package for connecting with the FlexNet Operations api

[![Latest Version on Packagist](https://img.shields.io/packagist/v/flexsim/flexnet-operations.svg?style=flat-square)](https://packagist.org/packages/flexsim/flexnet-operations)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/flexsim/flexnet-operations/run-tests?label=tests)](https://github.com/flexsim/flexnet-operations/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/flexsim/flexnet-operations/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/flexsim/flexnet-operations/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/flexsim/flexnet-operations.svg?style=flat-square)](https://packagist.org/packages/flexsim/flexnet-operations)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require flexsim/flexnet-operations
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="flexnet-operations-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="flexnet-operations-views"
```

## Usage

```php
$flexnetOperations = new Flexsim\FlexnetOperations();
echo $flexnetOperations->echoPhrase('Hello, Flexsim!');
```

# Type Generation

1. Run the flexnet WSDL file through the xml to json tool here: https://codebeautify.org/xmlviewer
2. Normalize Extension types in the wsdl file by extracting them from the base type into the child type

# Client Factory Generation

Make sure client factories use the BasicAuth middleware like so:

```php
public static function factory(string $wsdl, string $username, string $password): EntitlementOrderServiceClient
{
    $engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults($wsdl, [])
            ->withClassMap(EntitlementOrderServiceClassmap::getCollection()),
        Psr18Transport::createForClient(
            new PluginClient(
                Psr18ClientDiscovery::find(),
                [
                    new AuthenticationPlugin(new BasicAuth($username, $password)),
                ]
            )
        )
    );
}
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

- [Cole Shirley](https://github.com/cole.shirley)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
