<?php
declare(strict_types=1);

namespace DrPil;

use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{

    /**
     * @param string $input
     * @param string $expected
     * @dataProvider aValues
     */
    public function testReverseUppercase(string $input, string $expected)
    {
        $a = new A(new B($input));
        $this->assertEquals($expected, $a->reverseUppercase());
    }

    public function aValues(): array
    {
        return [
            ['Martin', 'NITRAM'],
            ['Pucan', 'NACUP'],
        ];
    }

}
