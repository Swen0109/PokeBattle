<?php 

    class Pikachu extends pokemons{

        public function __construct(){
            $name = "Pikachu";
            $energyType = "lightning";
            $hitPoints = 60;
            $health = 60;
            $attacks = [ new attack("electric ring", 50), new attack("pika punch", 20)];
            $weakness = [ new weakness("fire", 1.5)];
            $resistance = [new resistance("fighting", 20)];
            parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }

?>