<?php namespace foo;
class Animal
{
    public $name;
    public $color;
    public $sound; 

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "My name is {$this->name} and i am {$this->color}";
    }

    public function makeSound() {
        echo $this->sound;
    }
}

class Cat extends Animal
{
}
class Dog extends Animal
{

}
class Bird extends Animal
{

}
?>
