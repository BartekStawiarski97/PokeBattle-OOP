<?php
require "Weakness.php";
require "Resistance.php";
require "Attack.php";

class Pokemon{
    public $name;
    public $energytype;
    public $hitpoints;
    public $health;
    public $attacks;
    public $weakness;
    public $resistance;

    public function __construct($name, $type, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energytype = $type;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }
    
    
    // Pokemon stats
    public function PokemonStats(){
        return 
        "Name: ". $this->GetName()."<br>
         Health: ". $this->GetHealth()."/".$this->GetHitpoints()."<br>
         Attack(s): ". $this->GetAttacks()[0]->GetAttackName()." ".$this->GetAttacks()[0]->GetAttackDamage().", ".$this->GetAttacks()[1]->GetAttackName()." ".$this->GetAttacks()[1]->GetAttackDamage()."<br>
         Weakness: ". $this->GetWeakness()->weaknessName." ".$this->GetWeakness()->weaknessMultiplier."<br>
         Resistance: ". $this->GetResistance()->resistanceName." ".$this->GetResistance()->resistanceMultiplier." <br><br>";
    }

    public function __toString() {
        return json_encode($this);
    }

    public function GetName(){
        return $this->name;
    }

    public function GetHealth(){
        return $this->health;
    }

    public function GetHitpoints(){
        return $this->hitpoints;
    }

    public function GetEnergyType(){
        return $this->energytype;
    }

    public function GetAttacks(){
        return $this->attacks;
    }

    public function GetWeakness(){
        return $this->weakness;
    }

    public function GetResistance(){
        return $this->resistance;
    }
}
