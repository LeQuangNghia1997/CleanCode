
    <link rel="stylesheet" type="text/css" href="style.css">

<form method="post" name="FromTwo " action="furute.php">
    <div class="future">
    <h2>Future Value Calculator</h2>
    <?php
    $sotienbandau = $_POST["investment"];
    $laisuat = $_POST["yearly"];
    $sonamguitien = $_POST["numberYear"];
    $dolaa =$sotienbandau;
    if(!empty($sotienbandau) && !empty($laisuat) && !empty($sonamguitien)) {
        for ($count = 1; $count < $sonamguitien; $count++) {
            $giatrituonglai = ($sotienbandau + ($sotienbandau * $laisuat * 0.01));
            $sotienbandau = $giatrituonglai;
        }

        echo("<h4>" . "So tien ban dau: $" . $dolaa . "</h4>" . "<br>");
        echo("<h4>" . "lai suat: $" . $laisuat . "</h4>" . "<br>");
        echo("<h4>" . "So nam gui tien : " . $sonamguitien . "</h4>" . "<br>");
        echo("<h4>" . "Gia tri tuong lai: $" . $giatrituonglai . "</h4>" . "<br>");
    }
    else {
        echo ("<h4>"."Xin moi nhap lai"."</h4>");
    }

    ?>
    <input type="submit">
    </div>
</form>

