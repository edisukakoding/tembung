<?php

namespace Unit;

use Tembung\Tembung;
use JsonException;
use PHPUnit\Framework\TestCase;

class TembungTest extends TestCase
{
    /**
     * @return void
     */
    public function testQuotesFileExist(): void
    {
        $this->assertFileExists(__DIR__ . '/../../data/quotes.json');
    }

    /**
     * @throws JsonException
     */
    public function testSayQuotes(): void
    {
        $this->assertIsString(Tembung::say());
    }

}