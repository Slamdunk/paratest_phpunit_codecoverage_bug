<?php

declare(strict_types=1);

namespace MyTest;

use PHPUnit\Framework\TestCase;

/**
 * @covers \My\C
 */
final class CTest extends TestCase
{
    public function testMe(): void
    {
        self::assertTrue(true);
    }
}
