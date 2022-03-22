<?php
    function Palindrome($str){
        $data = strrev($str);
        if($str == $data){
            echo " ".$str." la chuoi Palindrome";
        }
        else {
            echo " ".$str." khong phai la chuoi Palindrome";
;       }
    }
    Palindrome('ZenttneZ');
?>