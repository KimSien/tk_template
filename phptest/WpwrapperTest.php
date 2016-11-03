<?php
/**
*
* dummy wrapper wordpress関数の検証用のテスト
*
*/

class WpwrapperTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
       $this->assertFalse(function_exists("korehanaiyo"));
       $this->assertTrue(function_exists("wp_title"));
        /*
        $a=1;
        $array = [1];
        $this->assertEquals(1,$a);
        $this->assertEquals(1, count($array));
        */
    }
}
