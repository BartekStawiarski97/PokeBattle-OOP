<?php

class Resistance{
	public $resistanceName;
	public $resistanceMultiplier;

	function __construct($name, $multiplier){
		$this->resistanceName = $name;
		$this->resistanceMultiplier = $multiplier;
	}

	public function GetResistanceName(){
    	return $this->resistanceName;
    }

    public function GetResistanceMultiplier(){
    	return $this->resistanceMultiplier;
    }
}