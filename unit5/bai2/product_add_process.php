<?php 
    session_start();

    $_product = $_POST;

    $_SESSION ['product'][] = $_product;
    
    header('location: ./cart/index.php');
?>