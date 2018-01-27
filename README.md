# Kimai v2 - Invoice templates

This repository contains additional invoice features and serves as a demo for building Kimai 2 bundles.

After installation you will have new renderer and calculator options available when editing an invoice template.

## Installation via Flex (recommended)

Install this extension via:
```bash
composer req invoice
``` 

Done! No need for manual adjustments: the bundle is installed, activated and configured - _pretty neat, right_?!

Behind the scenes, this command makes use of a Symfony flex [recipe](https://github.com/kimai/recipes/tree/master/kevinpapst/kimai2-invoice/0.1), hosted at the offical [Kimai recipes repository](https://github.com/kimai/recipes).

## Installation via Composer (classical)

Installation via composer:
```bash
composer require kevinpapst/kimai2-invoice
``` 

The bundle will be auto-activated, but you will have to copy the file `config/packages/kimai_invoice.yaml` to your `config/packages/` directory:
```bash
cp vendor/kevinpapst/kimai2-invoice/config/packages/kimai_invoice.yaml config/packages/
``` 

As last step clear your symfony cache:
```bash
bin/console cache:clear
```
