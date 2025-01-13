<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestFixture\Issue6098;

use PHPUnit\Framework\TestCase;

final class Issue6098Test extends TestCase
{
    public function testOne(): void
    {
        print 'output';

        $this->assertTrue(true);
    }
}
