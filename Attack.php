<?php

class Attack{
	private $attackName;
	private $attackDamage;

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