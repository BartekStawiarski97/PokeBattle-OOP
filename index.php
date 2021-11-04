<?php

require "Pokemon.php";
require "Pikachu.php";
require "Charmeleon.php";


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

     print_r('<pre>' . $pokemon1->PokemonStats() . '</pre>');

     ?>

     <img src="img/vs.jpg" alt="versus" width="150" height="100" class="mt-5">

     <?php

     print_r('<pre>' . $pokemon2->PokemonStats() . '</pre>');

     ?>

</section>

<section class="d-flex justify-content-between">

	<img src="img/pikachu.jpg" alt="pikachu" width="150" height="100">
	<img src="img/charmeleon.jpg" alt="charmeleon" width="150" height="100">
	
</section>

<section>
</section>
</body>
</html>
