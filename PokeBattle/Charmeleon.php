<?php 

    class Charmeleon extends pokemon{
        public function __construct(){
            $name = "Charmeleon";
            $energyType = "fire";
            $hitPoints = 60;
            $health = 60;
            $attacks = ["attackOneName" => "Head Butt", "attack1" => "10", "attackTwoName" => "Flare", "attack2" => "30"];
            $weakness = ["weakness" => "water", "multiplier" => "2"];
            $resistance = ["resistance" => "lightning", "multiplier" => "10"];

            parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }
?>