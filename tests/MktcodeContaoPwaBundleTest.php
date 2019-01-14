<?php

/*
 * This file is part of the Contao PWA Bundle.
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Mktcode\ContaoPwaBundle\Tests;

use Mktcode\ContaoPwaBundle\MktcodeContaoPwaBundle;
use PHPUnit\Framework\TestCase;

class MktcodeContaoPwaBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new MktcodeContaoPwaBundle();

        $this->assertInstanceOf('Mktcode\ContaoPwaBundle\MktcodeContaoPwaBundle', $bundle);
    }
}
