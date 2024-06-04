<?php 

include 'animal.php';
include 'insect.php';
include 'plant.php';



 // Add animals
 $lion = new Animal("Lion", 1, "savannah");
$elephant = new Animal("Elephant", 2, "jungle");
echo $lion->move() . "\n";
echo $elephant->eat("meat") . "\n";

// // Add plants
$rose = new Plant("Rose");
 $oak = new Plant("Oak");

 echo $rose->grow() . "\n";
echo $oak->photosynthesis("meat") . "\n";

// // Add insects
 $bee = new Insect("Bee", 4);
 $butterfly = new Insect("Butterfly", 6);

 echo $bee->fly() . "\n";
 echo $butterfly->eat("meat") . "\n";


?>