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
        function tong($number){
            $sum = 0;
            while($number > 0){
                $digit = $number % 10;
                $sum = $sum + $digit;
                $number = ($number - $digit) / 10;
            }
            return $sum;
        }
        
        $result = tong(232);
        echo $result
    ?>
</body>
</html>