<?php

// Inheritance => when a class derives from another class
// The child class will inherit all the public and protected
// properties and methods from the parent class. it can have its own methods 
// and properties

// An inherited classs is identified by using the extends keyword


class Fruit {
    public $name;
    public $color;


    // this will initialize the object property upon creation of the object.
    public function __construct($name, $color){
        $this -> name = $name;
        $this -> color = $color;
    }


    protected function intro () {

        echo "The fruit it {$this -> name} and the color is {$this -> color}";
    }

}


// Strawberry class below inherites all the methods and prperties of parent class Fruit

class Strawberry extends Fruit {

    public function message () {
        echo "Am I a fruit or a berry?";

        // we call protected method and properties WITHIN the child class, if you do it in the global scope it will error out

        $this -> intro();
    }
}


$strawberry = new Strawberry("Strawberry", "Red");

// calling a method of its own class

$strawberry -> message();

echo "\n";
// calling a method inherited from the parent class

// $strawberry -> intro();


//OVERRIDING INHERITED METHODS
// inherited methods can be overriden by redifining the methods(use the same name ) in the child class

class Fruiti {
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this -> name = $name;
        $this -> color = $color;
    }

    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}";
    }
}

class Blackberry extends Fruiti {

    public $weight;

    public function __construct($name, $color, $weight){
        $this -> name = $name;
        $this -> color = $color;
        $this -> weight = $weight;
    }

    public function intro(){
        echo "The fruit is {$this->name}, the color is {$this->color}, and it weighs {$this->weight} grams";
    }
}


$blackberry = new Blackberry("Blackberry", "Black", 30);

$blackberry -> intro();


//THE FINAL KEYWORD
//The final keyword can be used to prevent class inheritance or prevent method overriding 
// final can be applied to both class and methods

final class Vehicle {
    //code goes here
}

class Sedan extends Vehicle {
    // code goes here

    // the sedan class can not inherit vehicle class and it will feult in error
}


class Vehicle {
    //code goes here

    final public function intro(){
        // code here
    }
}

class Sedan extends Vehicle {
    // code goes here


    //this method can not be overriden because it's a final method of the parent class
    public function intro(){
        //code goes here
    }
}
