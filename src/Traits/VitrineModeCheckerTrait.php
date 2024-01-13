<?php

declare(strict_types=1);

namespace Latelier22\SyliusVitrineModePlugin\Traits;

use Latelier22\SyliusVitrineModePlugin\Checker\VitrineModeCheckerInterface;

/**
 * Class VitrineModeCheckerTrait.
 * @package Latelier22\SyliusVitrineModePlugin\Traits
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
