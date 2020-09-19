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
                    <a class="nav-link" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên Hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Đăng Nhập</a>
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
            if (isset($_GET["id"])&&$_GET["id"]<11 &&is_numeric($_GET["id"])){
            $id=$_GET["id"];
            $n=new model();
            $r=$n->getByID($id);

            while($set=$r->fetch()){

                ?>
                <aside class="col-sm-5 border-right" style="margin-bottom: 20px" >
                    <a href="details/<?php echo $set["0"];?>details.php" style="text-decoration: none;color:black">
                        <img src="../images/<?php echo $set["3"]; ?>" style = "height: 450px;width: 458px" ></a>
                </aside >
                <aside class="col-sm-7">
                    <h3><?php echo $set["1"] ?></h3><br>
                    <h3 style="color: red;font-size: 22px;font-weight: bold ">Giá Tiền: <?php $format=number_format($set["2"]);
                    echo $format; ?> VNĐ</h3><br>
                    <h3>Nhà Sản Xuất: <?php echo $set["4"]; ?></h3><br>
                    <h3>Số Lượng: <?php echo $set["5"]; ?></h3><br>
                    <a href="cart.php?id=<?php echo $set["0"] ?>" class="btn btn-success">Thêm Vào Giỏ Hàng</a>
                    <a href="index.php" class="btn btn-success">Trở về</a>

                </aside>
            <?php }}
            else {echo "<h1>Sản phẩm không tồn tại.</h1>";}
            ?>


        </div>


    </div>
<?php
include 'footer.php';
?>
