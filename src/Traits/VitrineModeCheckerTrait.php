<?php

declare(strict_types=1);

namespace Asdoria\SyliusVitrineModePlugin\Traits;

use Asdoria\SyliusVitrineModePlugin\Checker\VitrineModeCheckerInterface;

/**
 * Class VitrineModeCheckerTrait.
 * @package Asdoria\SyliusVitrineModePlugin\Traits
 *
 * @author  Philippe Vesin <pve.asdoria@gmail.com>
 */
trait VitrineModeCheckerTrait
{
    /**
     * @var VitrineModeCheckerInterface|null 
     */
    protected ?VitrineModeCheckerInterface $catalogModeChecker = null;

    /**
     * @return VitrineModeCheckerInterface|null
     */
    public function getVitrineModeChecker(): ?VitrineModeCheckerInterface
    {
        return $this->catalogModeChecker;
    }

    /**
     * @param VitrineModeCheckerInterface|null $catalogModeChecker
     */
    public function setVitrineModeChecker(?VitrineModeCheckerInterface $catalogModeChecker): void
    {
        $this->catalogModeChecker = $catalogModeChecker;
    }   
    
}
