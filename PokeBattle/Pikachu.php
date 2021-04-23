<?php 

    class Pikachu extends pokemon{
        public function __construct(){
            $name = "Pika";
            $energyType = "lightning";
            $hitPoints = 60;
            $health = 60;
            $attacks = ["attackOneName" => "Electric Ring", "attack1" => "50", "attackTwoName" => "Pika Punch", "attack2" => "20"];
            $weakness = ["weakness" => "fire", "multiplier" => "1.5"];
            $resistance = ["resistance" => "fighting", "multiplier" => "20"];

            parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }

?>