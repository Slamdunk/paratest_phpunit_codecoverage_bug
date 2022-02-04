<?php

declare(strict_types=1);

namespace My;

class D
{
    public function inArray(): bool
    {
        return \in_array(1, [
            DType::OPT,
        ], true);
    }
}
