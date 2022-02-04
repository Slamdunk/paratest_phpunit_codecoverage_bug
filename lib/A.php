<?php

declare(strict_types=1);

namespace My;

class A
{
    public function inArray(): bool
    {
        return \in_array(1, [
            AType::OPT,
        ], true);
    }
}
