<?php
declare(strict_types=1);

namespace DrPil;


class A
{
    /** @var B */
    private $b;

    /**
     * A constructor.
     * @param B $b
     */
    public function __construct(B $b = null)
    {
        $this->b = $b;
    }

    public function reverseUppercase(): string
    {
        return mb_strtoupper(strrev($this->b->lowercase()));
    }

}