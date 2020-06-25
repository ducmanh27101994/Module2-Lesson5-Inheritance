<?php

class Circle {
    protected $radius;
    protected $color;

    function __construct($radius,$color)
    {
        $this->radius=$radius;
        $this->color=$color;
    }
    function getRadius(){
        return $this->radius;
    }
    function setRadius($radius){
        $this->radius=$radius;
    }
    function getColor(){
        return $this->color;
    }
    function setColor($color){
        $this->color=$color;
    }

    function circleArea(){
        return pi() * ($this->radius **2);
    }

    function toString(){
        echo 'Radius: '.$this->radius.'<br/>';
        echo 'Color: '.$this->color.'<br/>';
        echo 'CircleArea: '.$this->circleArea().'<br/>';
    }

}
