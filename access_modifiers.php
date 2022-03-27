<?php
// Accesss modifiers => Public, Private, Protected

class Fruit {
    public $name;
    public $color;
    public $weight;


    // A default public function 
    // public property or method can be accessed from everywhere

    function set_name($name) {
        $this -> name = $name;
    }

    //protected property or method can be accessed within the class and by classes derived from that class (inherited)

    protected function set_color($color){
        $this -> color = $color;
    }

    //private property or method can ONLY be accessed within the class

    private function set_weight($weight){
        $this -> weight = $weight;
    }

}

$mango = new Fruit();

// The public function will work:

$mango -> set_name("Mango");

// The private and protected methods will error out 

$mango -> set_color("Yellow");

$mango -> set_weight("300");

var_dump($mango);