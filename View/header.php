<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if (isset($title)) echo $title;
    else{echo "Shop bán game";}
    ?></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

        :hover{
            color:aqua;
        }
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
    <div>
        <ul class="nav nav-tabs" style="font-size: 20px">
            <li class="nav-item" >
                <a class="nav-link active" href="#">Tất Cả</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link active" href="#">Giảm Giá</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link active" href="#">Mới Update</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link active" href="#">Bán Chạy</a>
            </li>
            <li class="nav-item" >
                <a  class="nav-link active" href="list-cart.php">Giỏ hàng</a>
            </li>
        </ul>
    </div>
</div>