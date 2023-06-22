<?php

declare(strict_types=1);

/*
 * This file is part of ex-akt/contao-vanilla-accordion-bundle.
 *
 * (c) ex-akt (www.ex-akt.de)
 *
 * @license LGPL-3.0-or-later
 */

namespace Exakt\ContaoVanillaAccordionBundle\Tests;

use Exakt\ContaoVanillaAccordionBundle\ContaoVanillaAccordionBundle;
use PHPUnit\Framework\TestCase;

class ContaoVanillaAccordionBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoVanillaAccordionBundle();

        $this->assertInstanceOf('Exakt\ContaoVanillaAccordionBundle\ContaoVanillaAccordionBundle', $bundle);
    }
}
