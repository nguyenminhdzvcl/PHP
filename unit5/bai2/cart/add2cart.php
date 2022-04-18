<?php 
    session_start();
    // luu mang 'product' vao bien 
    
   $products = array();
   if (isset($_SESSION['product'])){
       $products = $_SESSION['product'];
   }

   $key = $_GET['id'];
   $product = $products[$key];
   $product ['product_amount'] = 1;

   $_SESSION['cart'][] = $product;

   header('location: cart.php');
?>