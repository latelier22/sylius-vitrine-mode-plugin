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

use Latelier22\SyliusVitrineModePlugin\Model\Aware\VitrineModeAwareInterface;
use Latelier22\SyliusVitrineModePlugin\Traits\ChannelContextTrait;

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
