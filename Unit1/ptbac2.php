<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $heso_a = 1;
        $heso_b = 1;
        $heso_c = 1;
        $delta = $b * $b - 4 * $a * $c;
        if ($heso_a == 0 ) {
            echo "Nhap lai";
        }

        if ($delta < 0) {
            echo "Phuong trinh vo nghiem";
        }

        else if ($delta == 0) {
            echo ("Phương trình có một kep: " . "x1 = x2 =" . -(b/(2*a)); 
        }

        else if ($delta > 0) {
            echo ("Phương trình có nghiệm: " . "x1 = " . (-b + sqrt(Delta)) / (2a);
            echo ("Phương trình có nghiệm: " . "x2 = " . (-b - sqrt(Delta)) / (2a);
        }
    ?>
</body>
</html>