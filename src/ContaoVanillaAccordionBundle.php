<?php

declare(strict_types=1);

/*
 * This file is part of ex-akt/contao-vanilla-accordion-bundle.
 *
 * (c) ex-akt (www.ex-akt.de)
 *
 * @license LGPL-3.0-or-later
 */

namespace Exakt\ContaoVanillaAccordionBundle;

use Exakt\ContaoVanillaAccordionBundle\DependencyInjection\ContaoVanillaAccordionExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoVanillaAccordionBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): ContaoVanillaAccordionExtension
    {
        return new ContaoVanillaAccordionExtension();
    }
}
