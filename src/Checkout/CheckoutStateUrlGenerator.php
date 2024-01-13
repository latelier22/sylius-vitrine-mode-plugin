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

namespace Latelier22\SyliusVitrineModePlugin\Checkout;

use Latelier22\SyliusVitrineModePlugin\Checker\VitrineModeCheckerInterface;
use Latelier22\SyliusVitrineModePlugin\Traits\VitrineModeCheckerTrait;
use Sylius\Bundle\CoreBundle\Checkout\CheckoutStateUrlGeneratorInterface;
use Sylius\Component\Channel\Context\ChannelContextInterface;
use Sylius\Component\Core\Model\OrderInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Routing\RequestContext;


/**
 * Class CheckoutStateUrlGenerator
 * @package Latelier22\SyliusVitrineModePlugin\Checkout
 *
 * @author  Philippe Vesin <pve.asdoria@gmail.com>
 */
class CheckoutStateUrlGenerator implements CheckoutStateUrlGeneratorInterface
{
    use VitrineModeCheckerTrait;
    
    /**
     * @param CheckoutStateUrlGeneratorInterface $inner
     */
    public function __construct(
        protected CheckoutStateUrlGeneratorInterface $inner
    ) {

    }

    public function generateForOrderCheckoutState(
        OrderInterface $order,
        array $parameters = [],
        int $referenceType = self::ABSOLUTE_PATH,
    ): string {
        return $this->catalogModeChecker->checker() ?
            $this->generateForCart($parameters, $referenceType) :
            $this->inner->generateForOrderCheckoutState($order, $parameters, $referenceType)
        ;
    }

    public function generateForCart(array $parameters = [], int $referenceType = self::ABSOLUTE_PATH): string {
        return $this->inner->generateForCart($parameters, $referenceType);
    }

    public function setContext(RequestContext $context): void
    {
        $this->inner->setContext($context);
    }

    public function getContext(): RequestContext
    {
        return $this->inner->getContext();
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH): string
    {
        return $this->inner->generate($name, $parameters, $referenceType);
    }
}
