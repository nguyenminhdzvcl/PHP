<?php
    function Palindrome($str){
        $data = strrev($str);
        
        if($str == $data){
            echo "Chuoi :".$str." la chuoi Palindrome";
        }

        else {
            echo "Chuoi :".$str." khong phai la chuoi Palindrome";
;       }
    }
    Palindrome('ZenttneZ');
?>