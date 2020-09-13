<?php
session_start();
?>
<?php
include '../config/connect_database.php';
include '../Model/model.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web bán đĩa game dạo!!</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-to">
            <a class="navbar-brand" href="#">
                <img src="../images/logo.png" alt="Logo" style="width:200px;height: 80px">
            </a>
            <!-- Links -->
            <ul class="navbar-nav" >
                <li class="nav-item">
                    <a class="nav-link" href="#">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên Hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng Nhập</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Đăng Ký</a>
                </li>
            </ul>
            <form class="form-inline" method="post" style="margin-left: 200px">
                <input class="form-control mr-sm-2" type="text" name="find" placeholder="Search">
                <button class="btn btn-success" type="submit" name="submit">Search</button>
            </form>
        </nav>

    </div>
    <br>
    <div class="content">
        <div class="row">
            <?php

            if (isset($_SESSION['cart'])){


                            foreach ($_SESSION['cart']as $val){
                    ?>
                    <aside class="col-sm-5 border-right" style="margin-bottom: 20px" >

                            <img src="../images/<?php echo $val["image"]; ?>" style = "height: 450px;width: 458px" >
                    </aside >
                    <aside class="col-sm-7">
                        <h3><?php echo $val["name"] ?></h3><br>
                       <h3 style="color: red;font-size: 22px;font-weight: bold ">Giá Tiền: <?php $format=number_format($val["price"]);
                       echo $format; ?> VNĐ</h3><br>
<!--                        <h3>Nhà Sản Xuất: --><?php //echo $set["4"]; ?><!--</h3><br>-->
                        <h3>Số Lượng: <?php echo $val["qty"]; ?></h3><br>
<!--                        <a href="#" class="btn btn-success">Thêm Vào Giỏ Hàng</a>-->
                    </aside>
                <?php }}
            else {echo "<h1>Chưa có sản phẩm</h1>";}
            ?>


        </div>


    </div>
    <?php
    include 'footer.php';
    ?>
