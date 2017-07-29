<?php

declare(strict_types=1);

namespace tspencer244\NumberZero;

/**
 * Interface NumberProviderInterface
 * @package tspencer244\NumberZero
 */
interface NumberProviderInterface
{
    /**
     * @return int
     */
    public function getNumber(): int;

    /**
     * @param int $number
     * @return void
     */
    public function setNumber(int $number);
}
