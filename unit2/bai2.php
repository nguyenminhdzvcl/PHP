<?php
    $input =array(3,1,8,10,15,2,1);
    $output = array[];
    for($i = count($input); $i >=0; $i--){
        array_push($output,$input[$i]);
    }
    echo "Mang dao nguoc la :" . implode(" , ", $output);
?>