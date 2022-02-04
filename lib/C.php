<?php

declare(strict_types=1);

namespace My;

class C
{
    public function inArray(): bool
    {
        return \in_array(1, [
            CType::OPT,
        ], true);
    }
}
