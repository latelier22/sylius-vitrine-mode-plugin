<?php

declare(strict_types=1);

namespace Asdoria\SyliusVitrineModePlugin\Traits;

use Sylius\Component\Channel\Context\ChannelContextInterface;

/**
 * Class ChannelContextTrait.
 * @package Asdoria\SyliusVitrineModePlugin\Traits
 *
 * @author  Philippe Vesin <pve.asdoria@gmail.com>
 */
trait ChannelContextTrait
{
    /**
     * @var ChannelContextInterface|null 
     */
    protected ?ChannelContextInterface $channelContext = null;

    /**
     * @return ChannelContextInterface|null
     */
    public function getChannelContext(): ?ChannelContextInterface
    {
        return $this->channelContext;
    }

    /**
     * @param ChannelContextInterface|null $channelContext
     */
    public function setChannelContext(?ChannelContextInterface $channelContext): void
    {
        $this->channelContext = $channelContext;
    }
    
}
