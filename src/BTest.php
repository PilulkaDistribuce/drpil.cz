<?php
declare(strict_types=1);

namespace DrPil;

use PHPUnit\Framework\TestCase;

class BTest extends TestCase
{

    public function testLowercase()
    {
        $b = new B();
        $input = "Martin";
        $this->assertEquals("martin", $b->lowercase($input));
    }

}
