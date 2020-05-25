<?php
declare(strict_types=1);

namespace unit;


use PHPUnit\Framework\TestCase;

class PhpUnitTest extends TestCase
{
    public function testSum()
    {
        $this->assertSame(1, 0 + 1);
    }
}
