<?php 

    class Charmeleon extends pokemons{
        public function __construct(){
            $name = "Charmeleon";
            $energyType = "fire";
            $hitPoints = 60;
            $health = 60;
            $attacks = [ new attack("head butt", 10), new attack("flare", 30)];
            $weakness = [ new weakness("water", 2)];
            $resistance = [new resistance("lightning", 10)];

            parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }
?>
