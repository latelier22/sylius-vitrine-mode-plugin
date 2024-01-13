<?php

/*
 * This file is part of the Latelier22 Package.
 *
 * (c) Latelier22 .
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Latelier22\SyliusVitrineModePlugin\Form\Extension;


use Doctrine\ORM\EntityRepository;
use Sylius\Bundle\ChannelBundle\Form\Type\ChannelType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class ChannelTypeExtension
 * @package Latelier22\SyliusVitrineModePlugin\Form\Extension
 *
 * @author  Philippe Vesin <latelier.cyrille@gmail.com>
 */
class ChannelTypeExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('catalogMode', CheckboxType::class, [
            'label'  => 'latelier22_catalog_mode.form.channel.catalog_mode',
            'required'  =>  false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
        return [ChannelType::class];
    }
}
