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
$arr = [
    array(11, 12, 13),
   array(14,15,16),
    array(17,8,9)

];
function MaxArry($arr)
{
    $dem1 = 0;
    $dem2= 0;
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0;$j < count($arr[$i]);$j++){
            if ($arr[i][$j] > $max) {
                $max = $arr[$i][$j];
                $dem1 = $i;
                $dem2 = $j;
            }
        }
        }
    echo("Max: " . $max . "Cot: ".$dem1."Hang: ". $dem2);
}

MaxArry($arr);

?>
</body>
</html>