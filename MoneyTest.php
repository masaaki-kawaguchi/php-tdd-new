<?php
use PHPUnit\Framework\TestCase;
require('./Dollar.php');

class MoneyTest extends TestCase
{
    public function testMultiplation()
    {
        $dollar = new Dollar(5);
        $product = $dollar->times(2);
        $this->assertEquals(10, $product);
    }	
}
