<?php 
   session_start();
    // luu mang 'product' vao bien 
   $products_in_cart = array();
   if(isset($_SESSION['cart'])){
    $products_in_cart = $_SESSION['cart'];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách sản phẩm trong kho</h2>
  <a href="index.php">Trang sản phẩm</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Thành tiền</th>
        <th>Ảnh sản phẩm</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($products_in_cart as $key => $products) { ?>
        <tr>
          <td> <?= $products['product_code'] ?> </td>
          <td> <?= $products['product_name'] ?> </td>
          <td> <?= $products['product_amount'] ?> </td>
          <td> <?= number_format($products['product_price']) ?> </td>
          <td>Thanh tien</td>
          <td> <img width="100px" height="100px" src="" alt=""><?= $products['product_images'] ?></td>
          <td><a href="delete_product.php?id=<?= $key ?>" class = "btn btn-primary">Xóa khỏi giỏ hàng</a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>