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

namespace Asdoria\SyliusVitrineModePlugin\Checker;

use Asdoria\SyliusVitrineModePlugin\Model\Aware\VitrineModeAwareInterface;
use Asdoria\SyliusVitrineModePlugin\Traits\ChannelContextTrait;

/**
 * Class VitrineModeChecker.
 *
 * @author Philippe Vesin <pve.asdoria@gmail.com>
 */
final class VitrineModeChecker implements VitrineModeCheckerInterface
{
    use ChannelContextTrait;

    /**
     * @return bool
     */
    public function checker(): bool
    {
        $channel = $this->channelContext->getChannel();
        if (!$channel instanceof VitrineModeAwareInterface) return false;

        return $channel->isVitrineMode();
    }
}
