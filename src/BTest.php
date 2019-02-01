<?php
declare(strict_types=1);

namespace DrPil;

use PHPUnit\Framework\TestCase;

class BTest extends TestCase
{

    public function testLowercase()
    {
        $input = "Martin";
        $b = new B($input);
        $this->assertEquals("martin", $b->lowercase($input));
    }

}
