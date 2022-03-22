<?php
    $input =array(3,1,8,10,15,2,1);
    $max = $input[0];
    for($i = 1; $i < count($input); $i++){
        if($input[$i] >= $max){
            $max = $input[$i];
        }
        else {
            $max = $max;
        }
    }
    echo "<br> Gia tri max la :" .$max;
?>