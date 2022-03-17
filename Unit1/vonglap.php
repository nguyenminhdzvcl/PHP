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
        for ($i = 0; $i <= $number ; $i++) {
            if ($i % 3 == 0){
                echo "Fizz";
            }

            if ($i % 5 == 0){
                echo "Buzz";
            }

            if ($i % 5 == 0 $$ $i % 3 == 0){
                echo "FizzBuzz";
            }
            else {
                echo "ERROR";
            }
        }
    ?>
</body>
</html>