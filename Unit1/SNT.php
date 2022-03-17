<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp PHP</title>
</head>
<body>
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
            // so nguyen n < 2 khong phai la so nguyen to
            if ($n < 2) {
                return false;
            }
            $squareRoot = sqrt($n);
            for ($i = 2; $i <= $squareRoot; $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }
         
        $n = 100;
        echo ("Tất cả các số nguyên tố nhỏ hơn $n là: <br>");
        if ($n >= 2) {
            echo "2";
        }
        for ($i = 3; $i < $n; $i+=2) {
            if (isPrimeNumber($i)) {
                echo (" " . $i);
            }
        }
    ?>
</body>
</html>
</body>
</html>