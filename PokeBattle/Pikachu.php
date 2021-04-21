<?php 

    class Pikachu extends pokemon{
        public function __construct(){
            $name = "Pika";
            $energyType = "Lightning";
            $hitPoints = 60;
            $health = 60;
            $attacks = ["attackOneName" => "Electric Ring", "attack1" => "50", "attackTwoName" => "Pika Punch", "attack2" => "20"];
            $weakness = ["Fire => 1.5"];
            $resistance = ["Fighting => 20"];

            parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }

?>