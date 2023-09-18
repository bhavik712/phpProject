<?php
    class player{
        public $name;
        public $jersyNumber;
        public $age;
        public $country;

        public function introduction(){
            echo $this->name . " is from ". $this->country .". \n";
            echo "<br/>";

        }
    }

    $player1 = new Player();

    $player1->name = "Rohit";
    $player1->jersyNumber = 45;
    $player1->age = 36;
    $player1->country = "India";

    $player1->introduction();

?>
