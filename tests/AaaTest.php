<?php

declare(strict_types=1);

namespace MyTest;

use PHPUnit\Framework\TestCase;

/**
 * @covers \My\Aaa
 * @covers \My\MyType
 */
final class AaaTest extends TestCase
{
    public const LIST = [
        \My\MyType::OPT_ONE,
        \My\MyType::OPT_TWO,
        \My\MyType::OPT_THREE,
    ];

    public function testMe(): void
    {
        $evento = new \My\Aaa();

        foreach (self::LIST as $stato) {
            $evento->stato = $stato;

            self::assertTrue($evento->inArray());
        }
    }
}
