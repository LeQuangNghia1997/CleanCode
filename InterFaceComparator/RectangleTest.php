<?php
include  "Rectangle.php";
$rectangle = new Rectangle("rectangle",5,4);
echo $rectangle->calculateArea();
echo $rectangle->calculatePerimeter();