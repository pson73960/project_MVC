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
            <a class="navbar-brand" href="index.php">
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
            <form class="form-inline" method="post" style="margin-left: 150px">
                <input class="form-control mr-sm-2" type="text" name="find" placeholder="Search">
                <button class="btn btn-success" type="submit" name="submit">Search</button>
            </form>
        </nav>

    </div><br><br>
<?php require '../Model/register.php' ?>

<div class="wrapper fadeInDown">
<?php if (isset($_SESSION['error'])){ echo $_SESSION['error'];
unset($_SESSION['error']);}

    ?>
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="pass" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="#" class="text-info">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include "footer.php";?>
