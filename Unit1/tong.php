<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp PHP</title>
</head>
<body>
    <?php 
        $number = 100;
        $sum = 0;
        for ($i = 0; $i <= $number ; $i++) {
            $sum += 1/i; 
        }
        echo ("Tổng là: " . $sum);
    ?>
</body>
</html>