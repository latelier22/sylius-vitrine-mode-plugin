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

use Symfony\Component\Validator\Constraint;

/**
 * Class VitrineModeOrderItem.
 *
 * @author Philippe Vesin <latelier.cyrille@gmail.com>
 */
class VitrineModeOrderItem extends Constraint
{
    public $message = 'latelier22_vitrine_mode.order_item.vitrine_mode.enabled';


    public function validatedBy(): string
    {
        return 'latelier22_vitrine_mode_is_enabled';
    }
    
    /**
     * @return string
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}

