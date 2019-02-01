<?php
declare(strict_types=1);

namespace DrPil;


class B
{
    /**
     * @var string
     */
    private $value;


    /**
     * B constructor.
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function lowercase(): string
    {
        return mb_strtolower($this->value);
    }

}