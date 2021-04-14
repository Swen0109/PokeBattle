<?php
    class Agents extends Superhero{
        public function __construct($team, $oneliner){
            $name = "Jett";
            $gender = "Female";
            parent::__construct($name, $gender, $team, $oneliner);
        }
    }
?>