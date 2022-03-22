<?php
    function text($name){
        $name_new = strtolower($name);
        $name_new = ucwords($name_new);
        $data = explode(" ", $name_new);
        echo implode(" ",$data);
    }
    text('NGuyen sY MINh');
?>