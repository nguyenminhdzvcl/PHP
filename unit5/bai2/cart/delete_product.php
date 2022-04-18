<?php 
    session_start();
    // luu mang 'product' vao bien 
    
    $key = $_GET['id'];
    unset($_SESSION['cart'][$key]);

    header('location: cart.php')
?>