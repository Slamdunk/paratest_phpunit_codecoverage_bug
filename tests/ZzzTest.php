<?php

declare(strict_types=1);

namespace MyTest;

use My\Entity;
use My\MyType;
use PHPUnit\Framework\TestCase;

/**
 * @covers \My\Aaa
 * @covers \My\Zzz
 */
final class ZzzTest extends TestCase
{
    public function testMe(): void
    {
        $evento = new \My\Aaa();
        $evento->stato = MyType::OPT_TWO;

        self::assertNotNull($evento->stato);
    }
}
