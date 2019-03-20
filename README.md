## Clearbit API PHP Client

### Installation

```bash
composer require mcmatters/clearbit-api
```

### Usage

```php
<?php

declare(strict_types = 1);

require './vendor/autoload.php';

// For free usage, just ignore $apiKey argument.
$clientFree = new \McMatters\ClearbitApi\ClearbitClient();
$companies = $clientFree->autocomplete()->lookupByCompany('amgrade');

$client = new \McMatters\ClearbitApi\ClearbitClient('sk_XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');
$companies = $client->combined()->lookupByEmail('d.borzyonok@amgrade.com');
```
