<?php
include  "Circle.php";
$circle = new Circle("indigo",4);
echo $circle->calculateArea()."<br>";
echo $circle->calculatePerimeter();