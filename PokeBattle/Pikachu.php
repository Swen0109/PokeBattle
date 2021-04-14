<?php 

    class Pikachu extends pokemon{
        public function __construct(){
            $name = "Pika";
            $energyType = "Lightning";
            $hitPoints = "60";
            $health = "60";
            $attacks = ["Electric Ring => 50, Pika Punch => 20"];
            $weakness = ["Fire => 1.5"];
            $resistance = ["Fighting => 20"];

            parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }

?>