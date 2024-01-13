<?php

declare(strict_types=1);

/*
 * This file is part of the Latelier22 Package.
 *
 * (c) Latelier22 .
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Latelier22\SyliusVitrineModePlugin\StateMachine\Guard;

use Latelier22\SyliusVitrineModePlugin\Checkout\VitrineModeAwareInterface;
use Latelier22\SyliusVitrineModePlugin\Traits\VitrineModeCheckerTrait;
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
