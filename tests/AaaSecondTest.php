<?php

declare(strict_types=1);

namespace MyTest;

use PHPUnit\Framework\TestCase;

/**
 * @covers \My\AaaSecond
 */
final class AaaSecondTest extends TestCase
{
    public function testMe(): void
    {
        self::assertInstanceOf(
            \My\Aaa::class,
            new \My\Aaa()
        );
    }
}
