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
namespace Latelier22\SyliusVitrineModePlugin\EventListener;

use Latelier22\SyliusVitrineModePlugin\Traits\VitrineModeCheckerTrait;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Class AccessCheckListener.
 *
 * @author Philippe Vesin <latelier.cyrille@gmail.com>
 */
class AddToCartListener
{
    use VitrineModeCheckerTrait;

    public function __construct(protected TranslatorInterface $translator) {
    }

    /**
     * @param ResourceControllerEvent $event
     * @return void
     */
    public function onCheck(ResourceControllerEvent $event): void
    {
       if (!$this->getVitrineModeChecker()->checker()) return;

       $event->stop($this->translator->trans('latelier22_catalog_mode.channel.catalog_mode_error', 'flashs'));
    }
}
