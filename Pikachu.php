<?php 

require_once "Pokemon.php";

class Pikachu extends Pokemon {

    public function __construct($name)
    {
        parent::__construct($name,"Lightning",60,60, [new Attack("Pika Punch", 20), new Attack("Electric Ring", 50)], new Weakness("Fire", 1.5), new Resistance("Fighting", 20));
    }
    
}