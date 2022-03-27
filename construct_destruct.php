<?php

class Fruit {
    //properties
    public $name;
    public $color;

    //methods 
    // A constructor allows you to initialize an object's properties upon creation of the object

    function __construct($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }

    // function get_name(){
    //     return $this -> name;
    // }

    // function get_color(){
    //     return $this -> color;
    // }

    // A destructor is called when the object is destructed or script is stopped or exited.
    function __destruct() {
        echo "The fuit is {$this -> name} and the color is {$this -> color}.";
    }
}

$apple = new Fruit("Apple", "Red");
// echo $apple -> get_name();
// echo "\n";
// echo $apple -> get_color();