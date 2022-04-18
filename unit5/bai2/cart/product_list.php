<?php 
   session_start();
    // luu mang 'product' vao bien 
   $products = $_SESSION['product'];
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
  <a href="cart.php">Xem gio hang</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Giá bán</th>
        <th>Ảnh sản phẩm</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $products) { ?>
        <tr>
          <td> <?= $products['product_code'] ?> </td>
          <td> <?= $products['product_name'] ?> </td>
          <td> <?= $products['product_amount'] ?> </td>
          <td>Thanh tien</td>
          <td> <?= number_format($products['product_price']) ?> </td>
          <td> <img width="100px" height="100px" src="" alt=""> </td>
          <td><a href="" class = "btn btn-primary">Them vao gio hang</a></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>