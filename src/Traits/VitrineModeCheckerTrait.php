<?php

declare(strict_types=1);

namespace Latelier22\SyliusVitrineModePlugin\Traits;

use Latelier22\SyliusVitrineModePlugin\Checker\VitrineModeCheckerInterface;

/**
 * Class VitrineModeCheckerTrait.
 * @package Latelier22\SyliusVitrineModePlugin\Traits
 *
 * @author  Philippe Vesin <latelier.cyrille@gmail.com>
 */
trait VitrineModeCheckerTrait
{
    /**
     * @var VitrineModeCheckerInterface|null 
     */
    protected ?VitrineModeCheckerInterface $vitrineModeChecker = null;

    /**
     * @return VitrineModeCheckerInterface|null
     */
    public function getVitrineModeChecker(): ?VitrineModeCheckerInterface
    {
        return $this->vitrineModeChecker;
    }

    /**
     * @param VitrineModeCheckerInterface|null $vitrineModeChecker
     */
    public function setVitrineModeChecker(?VitrineModeCheckerInterface $vitrineModeChecker): void
    {
        $this->vitrineModeChecker = $vitrineModeChecker;
    }   
    
}
