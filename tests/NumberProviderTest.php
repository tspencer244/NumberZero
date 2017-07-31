<?php

declare(strict_types=1);

namespace tspencer244\NumberZero\Tests;

use PHPUnit\Framework\TestCase;
use tspencer244\NumberZero\NumberProvider;

final class NumberProviderTest extends TestCase
{
    public function testCanSetAndGetNumber()
    {
        $num = new NumberProvider();
        $num->setNumber(1);
        $this->assertEquals(1, $num->getNumber());
    }
}
