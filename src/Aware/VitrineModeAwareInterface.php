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

namespace Latelier22\SyliusVitrineModePlugin\Model\Aware;

/**
 * Class VitrineModeAwareInterface.
 *
 * @author Philippe Vesin <latelier.cyrille@gmail.com>
 */
interface VitrineModeAwareInterface
{
    /**
     * @return bool
     */
    public function isVitrineMode(): bool;

    /**
     * @param bool $catalogMode
     */
    public function setVitrineMode(bool $catalogMode): void;
}
