<?php

declare(strict_types=1);

namespace MyTest;

use My\BType;
use My\DType;
use PHPUnit\Framework\TestCase;

/**
 * @covers \My\D
 */
final class DTest extends TestCase
{
    public function testMe(): void
    {
        self::assertSame(1, DType::OPT);
    }
}
