<?php
    require "Superhero.php";
    $spiderman = new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
    print_r('<pre>'. $spiderman .'</pre>');
    $spiderman->sayOneliner();
?>

<?php
    require "Avenger.php";
    $thor = new Avenger('Thor', 'Male', 'For Asgard!');
    $thor->sayOneliner();
    print_r('<pre>'.$thor. '</pre>');
?>

<?php 
    require "Agents.php";
    $Jett = new Agents('Valorant', 'hahaha easy!');
    $Jett->sayOneliner();
    print_r('<pre>'.$Jett.'</pre>');
?>