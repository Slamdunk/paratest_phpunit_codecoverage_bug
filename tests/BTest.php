<?php

declare(strict_types=1);

namespace MyTest;

use My\B;
use My\BType;
use PHPUnit\Framework\TestCase;

/**
 * @covers \My\B
 */
final class BTest extends TestCase
{
    public function testMe(): void
    {
        self::assertSame(1, BType::OPT);
        self::assertTrue((new B())->inArray());
    }
}
