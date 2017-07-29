<?php

declare(strict_types=1);

namespace tspencer244\NumberZero;

use tspencer244\NumberZero\Exception\NumberNotZeroException;

/**
 * Class NumberZero
 * @package tspencer244\NumberZero
 */
final class NumberZero extends NumberProvider
{
    /**
     * @var int
     */
    private $number;

    /**
     * NumberZero constructor.
     * @param int $number
     */
    public function __construct(int $number = 0)
    {
        $this->setNumber($number);
    }

    /**
     * @return int
     */
    public function __invoke(): int
    {
        return $this->number;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number)
    {
        if ($number !== 0) {
            throw new NumberNotZeroException();
        }

        $this->number = $number;
    }
}
