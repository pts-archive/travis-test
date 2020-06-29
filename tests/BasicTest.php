<?php

use App\BasicClass;
use PHPUnit\Framework\TestCase;

final class BasicTest extends TestCase
{
    public function testBasicClassName()
    {
        $obj = new BasicClass();
        $this->assertSame(BasicClass::class, $obj->getName());
    }
}
