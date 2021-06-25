<?php 

    class pokemons{

        public static $population = 0;
        private $name;
        private $energyType;
        private $hitPoints;
        private $health;
        private $attacks;
        private $weakness;
        private $resistance;

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

        //Functie om de damage van een attack en de hp van de pokemon te berekenen.
        public function calculateDamage($attack, $attacker){

            if( $this->weakness[0]->weaknessName == $attacker->energyType ){
                $theAttack = $this->weakness[0]->weaknessMultiplier * $attacker->attacks[$attack]->attackDamage;
            }

            else if( $this->resistance[0]->resistance == $attacker->energyType ){
                $theAttack =  $attacker->attacks[$attack]->attackDamage - $this->resistance[0]->resistanceWaarde;
            } 
            
            else{
                $theAttack = $attacker->attacks[$attack]->attackDamage;
            }

            $this->hitPoints = $this->hitPoints - $theAttack;
            print_r( $this->getName() . "'s hp: " . $this->hitPoints . "<br><br>");
        }


        public function __toString(){
            return json_encode($this);
        }

        public function getName(){
            return $this->name;
        }

        public function getHitPoints(){
            return $this->hitPoints;
        }

        public function getHealth(){
            return $this->health;
        }

        public function getAttack($attackNumber){
            return $this->attacks[$attackNumber]->attackName;
        }
    }
?>
