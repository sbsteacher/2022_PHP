<?php
    class Fruit {
        private $name;
        private $color;
        private $price;

        function __construct($name, $price, $color) {
            $this->name = $name;
            $this->color = $color;
            $this->price = $price;
        }

        function print_fruit() {
            print "Name : {$this->name}<br>";
            print "Color : {$this->color}<br>";
            print "Price : {$this->price}<br>";
        }
    }

    $apple = new Fruit("Apple", 1000, "red");
    $banana = new Fruit("Banana", 500, "yellow");

    $apple->print_fruit();
    $banana->print_fruit();