<?php
    require "Superhero.php";
    $spiderman = new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
    print_r('<pre>'. $spiderman .'</pre>');
    $spiderman->sayOneliner();
?>

<br>

<?php
    require "Avenger.php";
    $thor = new Avenger('Thor', 'Male', 'For Asgard!');
    print_r('<pre>' .$thor. '</pre>');
    $thor->sayOneliner();
?>

