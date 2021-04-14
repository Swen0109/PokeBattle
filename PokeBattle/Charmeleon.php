<?php 

    class Charmeleon extends pokemon{
        public function __construct(){
            $name = "Charmeleon";
            $energyType = "Fire";
            $hitPoints =  "60";
            $health = "60";
            $attacks = ["Head Butt => 10, Flare => 30"];
            $weakness = ["Water => 2"];
            $resistance = ["Lightning => 10"];

            parent::__construct($name, $energyType, $hitPoints, $health, $attacks, $weakness, $resistance);
        }
    }
?>