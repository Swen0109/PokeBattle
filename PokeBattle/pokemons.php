<?php 

    class pokemon{

        public static $population = 0;
        public $name;
        public $energyType;
        public $hitPoints;
        public $healt;
        public $attacks;
        public $weakness;
        public $resistance;

        public function __construct($name,$energyType,$hitPoints,$healt,$attacks,$weakness,$resistance){
            $this->name = $name;
            $this->energyType = $energyType;
            $this->hitPoints = $hitPoints;
            $this->health = $healt;
            $this->attacks = $attacks;
            $this->weakness = $weakness;
            $this->resistance = $resistance;
            self::$population++;
        }

        public function __toString(){
            return json_encode($this);
        }

    }
?>