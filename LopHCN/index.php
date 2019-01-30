<?php
    include "LopHCN.php";
    $wight = 100;
    $height = 400;
    $retangle = new Rectangle($wight, $height);
    echo $retangle->widht;
    echo $retangle->height;
    $retangle->widht = 200;
    $retangle->height = 300;
    echo $retangle->height;
    echo $retangle->width;
    echo $retangle->getPerimeter();
    echo $retangle->getArea();
    echo("Your Rectangle " . $rectangle->display());
?>