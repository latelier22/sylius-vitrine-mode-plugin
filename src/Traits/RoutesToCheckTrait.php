<?php

declare(strict_types=1);

namespace Latelier22\SyliusVitrineModePlugin\Traits;

/**
 * Class RoutesToCheckTrait.
 * @package Latelier22\SyliusVitrineModePlugin\Traits
 *
 * @author  Philippe Vesin <latelier.cyrille@gmail.com>
 */
trait RoutesToCheckTrait
{
    /**
     * @var array
     */
    protected array $routesToCheck = [];

    /**
     * @return array
     */
    public function getRoutesToCheck(): array
    {
        return $this->routesToCheck;
    }

    /**
     * @param array $routesToCheck
     */
    public function setRoutesToCheck(array $routesToCheck): void
    {
        $this->routesToCheck = $routesToCheck;
    }

}
