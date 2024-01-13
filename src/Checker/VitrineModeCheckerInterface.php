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
namespace Latelier22\SyliusVitrineModePlugin\Checker;

/**
 * Class VitrineModeCheckerInterface.
 *
 * @author Philippe Vesin <pve.asdoria@gmail.com>
 */
interface VitrineModeCheckerInterface
{
    /**
     * @return bool
     */
    public function checker(): bool;
}
