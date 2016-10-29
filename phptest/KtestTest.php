<?php

class Ktest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $a=1;
        $array = [1];
        $this->assertEquals(1,$a);
        $this->assertEquals(1, count($array));
    }
}