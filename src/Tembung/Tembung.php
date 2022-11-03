<?php

namespace Tembung;

use JsonException;

class Tembung
{
    /**
     * @return mixed
     * @throws JsonException
     */
    public static function say(): mixed
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../data/quotes.json'), true, 512, JSON_THROW_ON_ERROR);

        return $data[array_rand($data)];
    }
}