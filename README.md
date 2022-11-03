# Tembung

Tembung is a random motivational quotes generator in Indonesian.

## Installation & Usage

Require this package with [Composer](https://getcomposer.org/) using the following command:

```shell
composer require edisukakoding/tembung
```

Then use it:

```php
<?php

require_once 'vendor/autoload.php';

use Tembung\Tembung;

try {
    echo Tembung::say();
} catch (JsonException $e) {
    echo $e->getTraceAsString();
}; // Prints out something quotes.
```

## License

Motivator is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
