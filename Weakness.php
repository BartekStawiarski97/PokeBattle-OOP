<?php 

class Weakness{
	public $weaknessName;
	public $weaknessMultiplier;

	function __construct($name, $multiplier){
		$this->weaknessName = $name;
		$this->weaknessMultiplier = $multiplier;
	}

	public function GetWeaknessName(){
    	return $this->weaknessName;
    }

    public function GetWeaknessMultiplier(){
    	return $this->weaknessMultiplier;
    }

}