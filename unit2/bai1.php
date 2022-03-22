<?php
    $input =array(3,1,8,10,30,2,1);
    $max = $input[0];
    for($i = 1; $i < count($input); $i++){
        if($input[$i] >= $max){
            $max = $input[$i];
        }
    }
    echo "Gia tri max la :" .$max;
?>