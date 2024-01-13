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

namespace Latelier22\SyliusVitrineModePlugin\Validator\Constraints;

use Latelier22\SyliusVitrineModePlugin\Checkout\VitrineModeAwareInterface;
use Latelier22\SyliusVitrineModePlugin\Traits\VitrineModeCheckerTrait;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Webmozart\Assert\Assert;

/**
 * Class VitrineModeOrderItemValidator.
 * @package Latelier22\SyliusVitrineModePlugin\Constraints
 *
 * @author  Philippe Vesin <latelier.cyrille@gmail.com>
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
