<?php
use PHPUnit\Framework\TestCase;
require('./Dollar.php');
require('./Franc.php');

class MoneyTest extends TestCase
{
   
	 public function testDollarMultiplation()
    {
        $dollar = new Dollar(5);
        $product = $dollar->times(2);
        $this->assertEquals(10, $product);
    }	
	
	public function testFrancMultiplation()
	{
		$franc = new Franc(4);
		$franc->times(3);
		$this->assertEquals(12, $franc->amount);	
	}
}
