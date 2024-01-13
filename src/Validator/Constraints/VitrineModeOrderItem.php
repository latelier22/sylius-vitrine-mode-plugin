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

use Symfony\Component\Validator\Constraint;

/**
 * Class VitrineModeOrderItem.
 *
 * @author Philippe Vesin <pve.asdoria@gmail.com>
 */
class VitrineModeOrderItem extends Constraint
{
    public $message = 'asdoria_catalog_mode.order_item.catalog_mode.enabled';


    public function validatedBy(): string
    {
        return 'asdoria_catalog_mode_is_enabled';
    }
    
    /**
     * @return string
     */
    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }
}

