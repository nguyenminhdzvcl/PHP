<?php
    function text($array_name){
        $arr_new = strtolower($arr_name);
        $arr_new = ucwords($array_name);
        $data = explode (" ", $arr_new);
        echo implode(" ",$data);
    }
    text('NGuyen sY MINh');
?>