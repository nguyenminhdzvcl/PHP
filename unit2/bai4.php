<?php
    function Palindrome($str){
        $data = strrev($str);
        
        if($str == $data){
            $str." la chuoi Palindrome";
        }

        else {
            $str." khong phai la chuoi Palindrome"
;        }
    }
    Palindrome('ZenttneZ');
?>