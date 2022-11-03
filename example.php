<?php

require_once 'vendor/autoload.php';

use Tembung\Tembung;

try {
    echo Tembung::say();
} catch (JsonException $e) {
    echo $e->getMessage();
}