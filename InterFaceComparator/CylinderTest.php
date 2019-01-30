<?php
include "Cylinder.php";
$cylinder = new Cylinder("marry",4,3);
echo $cylinder->calculateArea();
echo $cylinder->calculateVolume();