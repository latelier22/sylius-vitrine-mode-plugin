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

namespace Asdoria\SyliusVitrineModePlugin\Validator\Constraints;

use Asdoria\SyliusVitrineModePlugin\Checkout\VitrineModeAwareInterface;
use Asdoria\SyliusVitrineModePlugin\Traits\VitrineModeCheckerTrait;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Webmozart\Assert\Assert;

/**
 * Class VitrineModeOrderItemValidator.
 * @package Asdoria\SyliusVitrineModePlugin\Constraints
 *
 * @author  Philippe Vesin <pve.asdoria@gmail.com>
 */
class VitrineModeOrderItemValidator extends ConstraintValidator
{
    use VitrineModeCheckerTrait;

    /**
     * @param mixed      $value
     * @param Constraint $constraint
     */
    public function validate($value, Constraint $constraint)
    {

        /** @var VitrineModeOrderItem $constraint */
        Assert::isInstanceOf($constraint, VitrineModeOrderItem::class);
        
        if (!$this->getVitrineModeChecker()->checker()) return;

        $this->context->buildViolation($constraint->message)
            ->addViolation();
    }
}
