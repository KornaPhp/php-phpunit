<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\TestDox;

#[CoversMethod(Assert::class, 'assertContainsNotOnlyString')]
#[TestDox('assertContainsNotOnlyString()')]
#[Small]
final class assertContainsNotOnlyStringTest extends TestCase
{
    #[DataProviderExternal(assertContainsOnlyStringTest::class, 'failureProvider')]
    public function testSucceedsWhenConstraintEvaluatesToTrue(iterable $haystack): void
    {
        $this->assertContainsNotOnlyString($haystack);
    }

    #[DataProviderExternal(assertContainsOnlyStringTest::class, 'successProvider')]
    public function testFailsWhenConstraintEvaluatesToFalse(iterable $haystack): void
    {
        $this->expectException(AssertionFailedError::class);

        $this->assertContainsNotOnlyString($haystack);
    }
}
