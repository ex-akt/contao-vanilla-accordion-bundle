<?php

declare(strict_types=1);

/*
 * This file is part of ex-akt/contao-vanilla-accordion-bundle.
 *
 * (c) ex-akt (www.ex-akt.de)
 *
 * @license LGPL-3.0-or-later
 */

namespace Exakt\ContaoVanillaAccordionBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Exakt\ContaoVanillaAccordionBundle\ContaoVanillaAccordionBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoVanillaAccordionBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
