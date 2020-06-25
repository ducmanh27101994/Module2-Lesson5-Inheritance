<?php

include "Cylinder.php";


$circle = new Circle(5,"black");
$circle->circleArea();
$circle->toString();
echo '<br/>';
$cylinder = new Cylinder(7,"white",10);
$cylinder->toString();