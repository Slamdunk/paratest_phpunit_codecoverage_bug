<?php

declare(strict_types=1);

namespace My;

class B
{
    public function inArray(): bool
    {
        return \in_array(1, [
            BType::OPT,
        ], true);
    }
}
