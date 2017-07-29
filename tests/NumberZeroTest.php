<?php

declare(strict_types=1);

namespace tspencer244\NumberZero\Tests;

use tspencer244\NumberZero\ {
    Exception\NumberNotZeroException,
    NumberZero
};
use PHPUnit\Framework\TestCase;

final class NumberZeroTest extends TestCase
{
    public function testConstructsAsZero()
    {
        $zero = new NumberZero();
        $this->assertEquals(0, $zero->getNumber());
    }

    public function testThrowsExceptionIfConstructingAsNotZero()
    {
        $this->expectException(NumberNotZeroException::class);
        new NumberZero(1);
    }

    public function testThrowsExceptionIfSettingToNonZero()
    {
        $zero = new NumberZero();
        $this->expectException(NumberNotZeroException::class);
        $zero->setNumber(1);
    }

    public function testInvokingInstanceEqualsZero()
    {
        $zero = new NumberZero();
        $this->assertEquals(0, $zero());
    }
}
