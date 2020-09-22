PayU PHP SDK
===============
A PHP package to access the [PayU API](http://developers.payulatam.com/es/api/payments.html) by a comprehensive way.

This is an enhanced version of the original PayU PHP SDK developed by PayU that adds 
installation through composer, class namespacing and class autoloading instead of the 
old package full SDK require on initialization.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

With Composer installed, you can then install the extension using the following commands:

```bash
$ php composer.phar require jlorente/payu-php-sdk
```

or add 

```json
...
    "require": {
        "jlorente/payu-php-sdk": "*"
    }
```

to the ```require``` section of your `composer.json` file.

## Configuration

You have to set the configuration on runtime by using the static variables of 
the PayU class.

```php
PayU::$apiKey = "xxxxxxxxxxxx";
PayU::$apiLogin = "xxxxxxxxxxxx";
PayU::$merchantId = "1";
PayU::$language = SupportedLanguages::ES;
PayU::$isTest = false;
```

## License 
Copyright &copy; 2020 José Lorente Martín <jose.lorente.martin@gmail.com>.

Licensed under the BSD 3-Clause License. See LICENSE.txt for details.
