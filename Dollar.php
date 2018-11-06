<?php
class Dollar{
	
	private $amount;
	
	public function __construct($amount){
        $this->amount = $amount;
	}
	
	public function times($multiplier){
	    return $this->amount *= $multiplier;
	}

}
