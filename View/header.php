<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if (isset($title)) echo $title;
        else {
            echo "Shop bán game";
        }
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

        :hover {
            color: aqua;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="header">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-to">
            <a class="navbar-brand" href="index.php">
                <img src="../images/logo.png" alt="Logo" style="width:200px;height: 80px">
            </a>
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên Hệ</a>
                </li>
                <?php
                if (!isset($_SESSION['username'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Đăng Nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng Ký</a>
                    </li>
                <?php } ?>

                <?php
                if (isset($_SESSION['role']) && $_SESSION['role']==0) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Trang Admin</a>
                    </li>

                <?php } ?>

                <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Đăng Xuất
                        </a>
                    </li>

                <?php } ?>
            </ul>
            <?php
            if (isset($_SESSION['username'])) {

                ?>
                <p style="margin-left: 20px;margin-top: 18px;font-weight: bolder">
                    Welcome <?php echo $_SESSION['username']; ?></p>
            <?php } ?>
            <form class="form-inline" method="post" style="margin-left: 120px">
                <input class="form-control mr-sm-2" type="text" name="find" placeholder="Search">

            </form>
        </nav>
        <div>
            <ul class="nav nav-tabs" style="font-size: 20px">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tất Cả</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Giảm Giá</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Mới Update</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Bán Chạy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="list-cart.php">Giỏ hàng</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng Xuất</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Bạn Có Chắc Chắn Đăng Xuất Không!!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="logout.php" class="btn btn-primary">Đăng Xuất</a>
                </div>
            </div>
        </div>
    </div>