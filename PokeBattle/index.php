<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<br><br>

<h1 class="text-center">Pikachu VS Charmeleon</h1>


<?php 
    require "autoloading.php";
    
    $pikachu = new Pikachu('');
    $charmeleon = new Charmeleon('');

    //Start pokebattle
    echo "<br><br><br>";
    print_r( $pikachu->getName() . " vs " . $charmeleon->getName() ."<br><br>");
    print_r("Pikachu's health: " . $pikachu->getHealth() ."<br><br>");
    print_r("Charmeleon's health: " . $charmeleon->getHealth() ."<br><br>");
    
    //Pikachu's eerste attack.
    print_r("Pikachu attacks with " . $pikachu->getAttack(0) . "<br><br>");

    //Hp van charmeleon word berekend.
    $charmeleon->calculateDamage(0, $pikachu);

    //Charmeleon's eerste attack.
    print_r("Charmeleon attacks with " . $charmeleon->getAttack(1) . "<br><br>");

    //Hp van pikachu word berekend.
    $pikachu->calculateDamage(1, $charmeleon);
 
    if($pikachu->getHitPoints() <= 0){ 
        unset($pikachu); 
        pokemon::$population--; 
    } 
 
    else if($charmeleon->getHitPoints() <= 0){ 
        unset($charmeleon); 
        pokemon::$population--; 
    } 
 
    print_r("Population is: " . pokemons::$population); 

?>