<?php

declare(strict_types=1);

/*
 * This file is part of ex-akt/contao-vanilla-accordion-bundle.
 *
 * (c) ex-akt (www.ex-akt.de)
 *
 * @license LGPL-3.0-or-later
 */

namespace Exakt\ContaoVanillaAccordionBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContaoVanillaAccordionExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../../config'));
        $loader->load('services.yml');
    }
}
