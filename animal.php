<?php
    class Animal {
        public $cry = "bowbow!";

        function bow() {
            echo $this->cry . PHP_EOL;
        }
    }

    class Dog extends Animal {
        public $cry = "わんわん！";
    }
    class Cat extends Animal {
        public $cry = "にゃーにゃー";
    }

    $animal_1 = new Dog();
    $animal_1->bow();
    $animal_2 = new Cat();
    $animal_2->bow();
?>