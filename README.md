Kimai v2 - Invoice templates
=====================

This repository is a demo for bundles that want to ship their own Kimai invoice extension.

You can install it via:
```bash
composer require kevinpapst/kimai2-invoice
``` 

It will be auto-activated, but you will have to copy the file `config/packages/kimai_invoice.yaml` to your `config/packages/` directory:
```bash
cp vendor/kevinpapst/kimai2-invoice/config/packages/kimai_invoice.yaml config/packages/
``` 

As last step clear your symfony cache:
```bash
bin/console cache:clear
``` 

Thats it! You will have new renderer and calculator options available when editing an invoice template.

