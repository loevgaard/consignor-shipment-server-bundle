# Consignor Shipment Server Bundle

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]

Symfony bundle that integrates [Consignor Shipment Server PHP SDK](https://github.com/loevgaard/consignor-shipment-server-php-sdk).

## Installation

### Step 1: Download the bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require loevgaard/consignor-shipment-server-bundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new Loevgaard\ConsignorShipmentServerBundle\LoevgaardConsignorShipmentServerBundle(),
        ];

        // ...
    }

    // ...
}
```

### Step 4: Configure the bundle
```yaml
# app/config/config.yml

loevgaard_consignor_shipment_server:
    actor: "insert your consignor webservice actor"
    key: "insert your consignor webservice key"
```

[ico-version]: https://img.shields.io/packagist/v/loevgaard/consignor-shipment-server-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/loevgaard/consignor-shipment-server-bundle/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/loevgaard/consignor-shipment-server-bundle.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/loevgaard/consignor-shipment-server-bundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/loevgaard/consignor-shipment-server-bundle
[link-travis]: https://travis-ci.org/loevgaard/consignor-shipment-server-bundle
[link-scrutinizer]: https://scrutinizer-ci.com/g/loevgaard/consignor-shipment-server-bundle/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/loevgaard/consignor-shipment-server-bundle