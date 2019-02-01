<?php
declare(strict_types=1);

namespace DrPil;


class B
{

    public function lowercase(string $input): string
    {
        return mb_strtolower($input);
    }

}