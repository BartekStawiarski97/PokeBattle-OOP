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
    private static $population = 0;

    public function __construct($name, $type, $hitpoints, $health, $attacks, $weakness, $resistance)
    {
        $this->name = $name;
        $this->$energytype = $type;
        $this->hitpoints = $hitpoints;
        $this->health = $health;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$population++;
    }
    
    
    // Pokemon stats
    public function PokemonStats(){
        return
        "<br> Name: ". $this->GetName()."<br>
         Health: ". $this->GetHealth()."/".$this->GetHitpoints()."<br>
         Attack: ". $this->GetAttacks()[0]->GetAttackName()." ".$this->GetAttacks()[0]->GetAttackDamage().", ".$this->GetAttacks()[1]->GetAttackName()." ".$this->GetAttacks()[1]->GetAttackDamage()."<br>
         Weakness: ". $this->GetWeakness()->weaknessName." ".$this->GetWeakness()->weaknessMultiplier."<br>
         Resistance: ". $this->GetResistance()->resistanceName." ".$this->GetResistance()->resistanceMultiplier." <br><br>";
    }

    public function GetName(){
        return $this->name;
    }

    public function GetEnergyType(){
        return $this->energytype;
    }

    public function GetHealth(){
        return $this->health;
    }

    public function GetHitpoints(){
        return $this->hitpoints;
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

    public function SetName($newName){
        $this->name = $newName;
    }

    public function SetEnergytype($newEnergytype){
        $this->energytype = $newEnergytype;
    }

    public function SetHealth($newHealth){
        if($newHealth < 0){
            $this->health = 0;
        }else{
           $this->health = $newHealth;
        }

        if($newHealth <= 0){
            self::$population--;
        }
        
    }

    public function SetHitpoints($newHitpoints){
        $this->hitpoints = $newHitpoints;
    }

    public function SetAttack($newAttack, $newAttackdamage){
        $cache = new Attack($newAttack, $newAttackdamage);
        $this->attacks [] = $cache;
    }   

    public function SetWeakness($newWeakness, $newMultiplier){
        $this->weakness = new Weakness($newWeakness, $newMultiplier);
    }

    public function SetResistance($newResistance, $newMultiplier){
        $this->resistance = new Resistance($newResistance, $newMultiplier);
    }

    public static function getPopulation(){
        return self::$population;
    }
}

