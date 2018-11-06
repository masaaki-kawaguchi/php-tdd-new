<?php
use PHPUnit\Framework\TestCase;
require('./Dollar.php');
class MoneyTest extends TestCase
{
    public function testMultiplation()
    {
    	$doller = new Doller(5);
		$doller.times(2);
		$this->assertEquals(10, $doller);
	}
}
