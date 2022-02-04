<?php

declare(strict_types=1);

namespace My;

class Aaa
{
    public int $stato = MyType::OPT_ONE;

    public function inArray(): bool
    {
        return \in_array($this->stato, [
            MyType::OPT_ONE,
            MyType::OPT_TWO,
            MyType::OPT_THREE,
        ], true);
    }
}
