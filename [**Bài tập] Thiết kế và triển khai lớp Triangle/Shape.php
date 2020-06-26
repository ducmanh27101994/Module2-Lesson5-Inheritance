<?php

class Shape {
    protected $color;
//    function __construct($color)
//    {
//        $this->color=$color;
//    }
    function setColor($color){
        $this->color=$color;
    }

    function show(){
        echo "Color cua tam giac: $this->color";
    }

}