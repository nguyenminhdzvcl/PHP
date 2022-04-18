<?php
    // lay du lieu tu form gui len (name)
    $u = $_POST['username'];
    $p = $_POST['password'];

    // ket noi csdl (1: localhost ; 2: "root" la user name ; 3: "" la password ; 4: "csdldemo" la ten chua du lieu)
    $db = mysqli_connect("localhost", "root", "","csdldemo");

    // truy van du lieu - tim username va password cos trong csdl
    $sql = "select * from users where username='$u' and password='$p' ";

    // thuc thi truy van
    $rs = mysqli_query($db , $sql);

    if (mysqli_num_rows($rs) > 0){
        header("location: dashboard.php");
    }
    else {
        echo "<h1>Dang nhap khong thanh cong</h1>";

        require_once 'logIn.html';
    }
?>