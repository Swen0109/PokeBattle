<?php
    require "pokemons.php";
    $pokemon1 = new pokemon('Pika', 'Lightning', '60', '60', 'Electric Ring[50], Pika Punch[20]', 'Fire[1.5]', 'Fighting[20]');
    print_r('<pre>'. $pokemon1 . '</pre>');
?>

<br><br>
Pikachu:
<?php
    require "Pikachu.php";
    $pikachu = new Pikachu('');
    print_r('<pre>'. $pikachu . '</pre>');
?>

<br><br>
Charmeleon:
<?php 
    require "Charmeleon.php";
    $charmeleon = new Charmeleon('');
    print_r('<pre>' . $charmeleon . '</pre>');

?>