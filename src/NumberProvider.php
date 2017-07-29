<?php

declare(strict_types=1);

namespace tspencer244\NumberZero;

/**
 * Class NumberZero
 * @package tspencer244\NumberZero
 */
class NumberProvider implements NumberProviderInterface
{
    /**
     * @var int
     */
    private $number;

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return void
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }
}
