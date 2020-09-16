<?php
session_start();
include '../config/connect_database.php';
include '../Model/model.php';
if (!isset($_SESSION['role']) || $_SESSION['role'] != 0 ){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Admin</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<style>
    body {
        padding-top: 56px;
    }
</style>

<body>
<div class="container">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="admin.php">Admin Shop Game</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="font-size: 24px">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <?php
                if (isset($_SESSION['username'])) {
                ?>
                <li class="nav-item">
                    <h5 style="color: aliceblue;margin-top: 13px">Welcome to <?php echo $_SESSION['username']; ?></h5>
                </li>
                <?php }?>

                <li class="nav-item">
                    <a class="nav-link" href="logout.php" style="font-size: 24px;">Đăng Xuất</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Gosu Shop</h1>
            <div class="list-group">
                <a href="index.php" style="text-decoration: none" class="list-group-item">Trở Về</a>

            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
                <a type="button" style="margin-top: 95px;margin-bottom: 20px;font-size: 24px   " class="btn btn-primary">Thêm Sản Phẩm</a><br>


            <div class="row">
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>NXX</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $n=new model();
                    $r=$n->getList();
                    while($set=$r->fetch()){
                    ?>
                    <tr>
                        <td><?php echo $set["name"]?></td>
                        <td><?php echo $set["price"]?></td>
                        <td><?php echo $set["NXX"]?></td>
                        <td><img src="../images/<?php echo $set["image"]?>" style="height: 150px;width: 150px"></td>

                    </tr>
                    <?php } ?>
                    </tbody>
                </table>












            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>
</div>


</body>

</html>