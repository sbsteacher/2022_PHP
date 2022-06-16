<?php
    class Fruit {
        private $name;
        private $color;
        private $price;
        
        function __construct($name=null, $price=null, $color=null) {
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

    $apple = new Fruit(null, null, "Red");
    $banana = new Fruit(null, 500);

    $apple->print_fruit();
    $banana->print_fruit();