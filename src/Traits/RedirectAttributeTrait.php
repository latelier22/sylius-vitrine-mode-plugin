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

namespace Latelier22\SyliusVitrineModePlugin\Traits;

/**
 * Class RedirectAttribute.
 * @package Latelier22\SyliusVitrineModePlugin\Traits
 *
 * @author  Philippe Vesin <pve.asdoria@gmail.com>
 */
trait RedirectAttributeTrait
{
    /**
     * @var string|null 
     */
    protected ?string $redirectAttribute = null;

    /**
     * @return string|null
     */
    public function getRedirectAttribute(): ?string
    {
        return $this->redirectAttribute;
    }

    /**
     * @param string|null $redirectAttribute
     */
    public function setRedirectAttribute(?string $redirectAttribute): void
    {
        $this->redirectAttribute = $redirectAttribute;
    }
}
