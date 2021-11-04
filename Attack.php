<?php

class Attack{
	public $attackName;
	public $attackDamage;

	function __construct($name, $damage){
		$this->attackName = $name;
		$this->attackDamage = $damage;
	}

	public function GetAttackName(){
    	return $this->attackName;
    }

    public function GetAttackDamage(){
    	return $this->attackDamage;
    }
}