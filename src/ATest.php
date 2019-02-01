<?php
declare(strict_types=1);

namespace DrPil;

use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{

    public function testReverseUppercase()
    {
        $a = new A();
        $input = 'Martin';
        $this->assertEquals('NITRAM', $a->reverseUppercase());
    }

}
