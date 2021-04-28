<style>
    body{
        background-image: url("image.png");
        background-position: center;
        background-repeat: no-repeat;
        width:100%;
        height:100%;
    }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<br><br>

<h1 class="text-center">Pikachu VS Charmeleon</h1>

<?php 
    require "pokemons.php";
    require "Pikachu.php";
    require "Charmeleon.php";
    $pikachu = new Pikachu('');
    $charmeleon = new Charmeleon('');

    
    echo "<br><br><br>";
    print_r( $pikachu->name . " vs " . $charmeleon->name ."<br><br>");
    print_r("Pikachu's health: " . $pikachu->health ."<br><br>");
    print_r("Charmeleon's health: " . $charmeleon->health ."<br><br>");
    print_r("Pikachu attacks with " . $pikachu->attacks["attackOneName"] . "<br><br>");

    if($charmeleon->weakness["weakness"] == $pikachu->energyType){
        print_r("Charmeleon's health: " . $charmeleon->health = $pikachu->attacks["attack1"] * $charmeleon->weakness["multiplier"]);
    }

    else if($charmeleon->resistance["resistance"] == $pikachu->energyType){
        print_r("Charmeleon now has " . $charmeleon->health = $pikachu->attacks["attack2"] - $charmeleon->resistance["multiplier"] . " health" . "<br><br>");
    }

    print_r("Charmeleon attacks with " . $charmeleon->attacks["attackTwoName"] . "<br><br>");

    if($pikachu->weakness["weakness"] == $charmeleon->energyType){
        print_r("Pikachu now has " . $pikachu->health = $charmeleon->attacks["attack2"] * $pikachu->weakness["multiplier"] - $pikachu->health . " health" . "<br><br>");
    }

    else if($pikachu->resistance["resistance"] == $charmeleon->energyType){
        print_r("Pikachu now has " . $pikachu->health = $charmeleon->attacks["attack2"] - $pikachu->resistance["multiplier"] . " health" . "<br><br>");
    }

    print_r("Population is: " . pokemon::$population . "<br><br>");

    if($pikachu->hitPoints <= 0){
        unset($pikachu);
        pokemon::$population--;
    }

    else if($charmeleon->hitPoints <= 0){
        unset($charmeleon);
        pokemon::$population--;
    }

    print_r("Population is: " . pokemon::$population);

?>