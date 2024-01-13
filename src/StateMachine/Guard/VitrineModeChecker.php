<?php

declare(strict_types=1);

/*
 * This file is part of the Asdoria Package.
 *
 * (c) Asdoria .
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Asdoria\SyliusVitrineModePlugin\StateMachine\Guard;

use Asdoria\SyliusVitrineModePlugin\Checkout\VitrineModeAwareInterface;
use Asdoria\SyliusVitrineModePlugin\Traits\VitrineModeCheckerTrait;
use Sylius\Component\Core\Model\OrderInterface;

/**
 * Class VitrineModeChecker.
 *
 * @author Philippe Vesin <pve.asdoria@gmail.com>
 */
class VitrineModeChecker
{
    use VitrineModeCheckerTrait;

    /**
     * @return bool
     */
    public function disabledVitrineMode(): bool
    {
        return !$this->getVitrineModeChecker()->checker();
    }
}
