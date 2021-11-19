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
<section class="d-flex justify-content-between">

     <?php
     
     echo '<img src="img/pikachu'.'.jpg">';
     print_r('<pre>' . $pokemon1->PokemonStats() . '</pre>');

     ?>

     <img src="img/vs.jpg" alt="versus" width="150" height="100" class="mt-5" style="margin-left: 150px;">

     <?php

     print_r('<pre>' . $pokemon2->PokemonStats() . '</pre>');
     echo '<img src="img/charmeleon'.'.jpg">';

     ?>

</section>


<section class="text-center card mt-5">

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


//shows number of pokemons that are still alive
echo " <br>Pokemons alive: ".Pokemon::getPopulation();
echo "<br>";
echo "<br>";
?>
</section>
</body>
</html>
