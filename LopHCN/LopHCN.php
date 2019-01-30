<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Rectangle {
    public $widht;
    public $height;
    public function _construct($wight, $height){
        $this-> width = $wight;
        $this->height = $height;
    }

public function getArea(){
    return $this->width*$this->height;
}
public function getPerimeter(){
        return($this->wight+$this->height)*2;

}
public function display(){
        return "Rectangle{"."width=".$this->widht.",height =" .$this->height."}";
}
}
?>
</body>
</html>