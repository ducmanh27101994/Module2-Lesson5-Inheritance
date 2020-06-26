<?php

include "Shape.php";

class Triangle extends Shape
{
    protected $side1;
    protected $side2;
    protected $side3;

//    public function __construct($color, $side1, $side2, $side3)
//    {
//        parent::__construct($color);
//        $this->side1 = $side1;
//        $this->side2 = $side2;
//        $this->side3 = $side3;
//    }

    public function getSide1()
    {
        return $this->side1;
    }


    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }


    public function getSide2()
    {
        return $this->side2;
    }

    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    function testTriangle()
    {
        if ($this->side1 + $this->side2 > $this->side3 && $this->side1 + $this->side3 > $this->side2 && $this->side2 + $this->side3 > $this->side1) {
            return true;
        }
    }

    function getPerimeter()
    {
        if ($this->testTriangle()) {
            return $this->side1 + $this->side2 + $this->side3;
        }
    }
    function getArea() {
        $p = $this->getPerimeter()/2; //Nửa chu vi
        if ($this->testTriangle()) {
            return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
        }

    }

    function toString()
    {
        echo "Side1: ".$this->side1."<br/>".
            "Side2: ".$this->side2."<br/>".
            "Side3: ".$this->side3."<br/>".
            "Dien tich: ".$this->getArea()."<br/>".
            "Chu Vi: ".$this->getPerimeter()."<br/>";

    }

}