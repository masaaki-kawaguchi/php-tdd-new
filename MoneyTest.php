<?php
use PHPUnit\Framework\TestCase;
require('./Dollar.php');

class MoneyTest extends TestCase
{
    public function testMultiplation()
    {
        $dollar = new Dollar(5);
        $dollar->times(2);
        $this->assertEquals(10, $dollar->amount);
    }	
}
