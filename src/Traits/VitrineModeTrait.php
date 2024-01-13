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

namespace Asdoria\SyliusVitrineModePlugin\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class VitrineModeTrait.
 *
 * @author Philippe Vesin <pve.asdoria@gmail.com>
 */
trait VitrineModeTrait
{
    /**
     * @ORM\Column(name="catalog_mode", type="boolean", nullable=false, options={"default" : false})
     */
    protected bool $catalogMode = false;

    /**
     * @return bool
     */
    public function isVitrineMode(): bool
    {
        return $this->catalogMode;
    }

    /**
     * @param bool $catalogMode
     *
     * @return void
     */
    public function setVitrineMode(bool $catalogMode): void
    {
        $this->catalogMode = $catalogMode;
    }
}
