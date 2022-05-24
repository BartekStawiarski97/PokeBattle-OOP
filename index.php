<?php

require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";
require "Battle.php";



$pokemon1 = new Pikachu("Pikachu");
$pokemon2 = new Charmeleon("Charmeleon");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>PokeBattle - OOP</title>
</head>
<body>
<style>
body {
  background-image: url('img/background.jpg');
}
</style>
<section class="d-flex justify-content-between">

     <?php
     
     echo "<pre>";
     echo('<pre>Name: ' . $pokemon1->getName() . '</pre>');
     echo('<pre><br>Health: ' . $pokemon1->getHealth() ."/". $pokemon1->getHitpoints(). '</pre>');
     echo('<pre><br>Attack: ' . $pokemon1->GetAttacks()[0]->GetAttackName() ." ". $pokemon1->GetAttacks()[0]->GetAttackDamage().", ". $pokemon1->GetAttacks()[1]->GetAttackName()." ".$pokemon1->GetAttacks()[1]->GetAttackDamage(). '</pre>');
     echo('<pre><br>Weakness: ' .  $pokemon1->GetWeakness()->GetweaknessName()." ".$pokemon1->GetWeakness()->GetweaknessMultiplier(). '</pre>');
     echo('<pre><br>Resistance: '.  $pokemon1->GetResistance()->GetresistanceName()." ".$pokemon1->GetResistance()->GetresistanceMultiplier().  '</pre>');
     echo "</pre>";

     ?>

     <img src="img/vs.jpg" alt="versus" width="150" height="100" class="mt-5" style="margin-right: 50px;">

     <?php
     
     echo "<pre>";
     echo('<pre>Name: ' . $pokemon2->getName() . '</pre>');
     echo('<pre><br>Health: ' . $pokemon2->getHealth() ."/". $pokemon2->getHitpoints(). '</pre>');
     echo('<pre><br>Attack: ' . $pokemon2->GetAttacks()[0]->GetAttackName() ." ". $pokemon2->GetAttacks()[0]->GetAttackDamage().", ". $pokemon2->GetAttacks()[1]->GetAttackName()." ".$pokemon2->GetAttacks()[1]->GetAttackDamage(). '</pre>');
     echo('<pre><br>Weakness: ' .  $pokemon2->GetWeakness()->GetweaknessName()." ".$pokemon2->GetWeakness()->GetweaknessMultiplier(). '</pre>');
     echo('<pre><br>Resistance: '.  $pokemon2->GetResistance()->GetresistanceName()." ".$pokemon2->GetResistance()->GetresistanceMultiplier().  '</pre>');
     echo "</pre>";

     ?>

</section>


<section class="text-center font-weight-bold mt-5">
 <div class="card mx-auto" style="width:450px;">

<?php 

$fight = new Fight($pokemon1, $pokemon2);

echo "<br>";

$fight->Attack($pokemon1, $pokemon2, "Electric Ring");
echo $fight->GetMessage();
//pokemon1 (pikachu) attacks pokemon2 (charmeleon) with eletric ring

echo "<br>";

$fight->Attack($pokemon2, $pokemon1, "Flare");
echo $fight->GetMessage();
//pokemon2 (charmeleon) attacks pokemon1 (pikachu) with flare

echo $pokemon1->GetName()." attacked ".$pokemon2->GetName()." and dealt 50 damage. <br>".$pokemon2->GetName()."'s health is now: ".$pokemon2->GetHealth()."<br><br>";

//shows number of pokemons that are still alive
echo " <br>Pokemons alive: ".Pokemon::getPopulation();
echo "<br>";
echo "<br>";
?>
</div>
</section>
<section class="d-flex justify-content-between">
<img src="img/pikachu.jpg" width="300" style="margin-left: 50px;">
<img src="img/charmeleon.jpg">
</section>
</body>
</html>
