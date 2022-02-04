<?php

declare(strict_types=1);

namespace MyTest;

use My\A;
use PHPUnit\Framework\TestCase;

/**
 * @covers \My\A
 */
final class ATest extends TestCase
{
    public function testMe(): void
    {
        self::assertTrue((new A())->inArray());
    }
}
