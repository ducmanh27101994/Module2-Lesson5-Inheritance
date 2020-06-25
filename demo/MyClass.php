<?php

class Animal {
    public $property;

    function say(){
        echo "Method";
    }
}

//class Dog extends Animal
//{
//    //Đối tượng chó đều có thuộc tính và phương thức của animal
//}
//$dog = new Dog();
//$dog->say();
//$dog->property = "Hello";
//echo $dog->property;

//class Dog extends Animal{
//    public $propertyDog;
//
//    function sayDog(){
//        echo "Gau Gau";
//    }
//}
//
//$dog = new Dog();
//$dog->sayDog();
//$dog->property = "cho";
//echo $dog->property;

class A{
    function m(){
        echo 'This method is defined inside class A';
    }
}
class B extends A{
    function m(){
        echo 'This method is overrided by class B';
    }
}

$b = new B();

$b->m();