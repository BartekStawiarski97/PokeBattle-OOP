<?php 

require_once "Pokemon.php";

class Fight{
    
    public $message;

    /* Gets Attacker attacks*/

    public function Attack($attacker, $defender, $attack){
        foreach($attacker->GetAttacks() AS $key=>$element){
            if ($element->GetAttackName() == $attack){
                $attackIndex = $key;
            }
        }
        $this->CalculateDamage( $defender->GetWeakness(), $defender->GetResistance(), $attacker->GetAttacks()[$attackIndex]->GetAttackDamage(), $attacker->GetEnergyType(), $defender, $attacker);
    }

    /* Calculate damage by weakness and restistance */

    public function CalculateDamage($weakness, $resistance, $damage, $attackerType, $defender, $attacker){
        if( $weakness->GetweaknessName() == $attackerType){
            $attackdamage = $damage * $weakness->GetWeaknessMultiplier();
        } else if($resistance->GetresistanceName() == $attackerType){
            $attackdamage = $damage - $resistance->GetResistanceMultiplier(); 
        }else{
            $attackdamage = $damage; 
        }
        $this->DealDamage($attackdamage, $defender, $attacker);
    }

    /* Check opponents health */

    public function DealDamage($damage, $defender, $attacker){
        $currentHealth = $defender->GetHealth();
        $defender->SetHealth($currentHealth-$damage);
        $this->message = $attacker->GetName()." attacked ".$defender->GetName()." and dealt ".$damage." damage <br>".$defender->GetName()."'s health is now: ".$defender->GetHealth()."<br><br>";

    }

    public function GetMessage(){
        return $this->message;
    }
    
       
}