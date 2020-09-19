<?php
include '../config/connect_database.php';
include '../Model/model.php';
session_start();
if (isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['pass'];
    if (trim($user)!="" and trim($pass!="")){
        $user=stripcslashes($user);
        $pass=stripcslashes($pass);
        $user=strip_tags($_POST['username']);
        $pass=strip_tags($_POST['pass']);

        $n=new model();
        $r=$n->login($user,$pass);
        $set=$r->fetch();
        if ($set>0){

            $_SESSION['username']=$set['1'];
            $_SESSION["role"]=$set["role"];
//            $error="<div class='alert alert-success text-center' role='alert'>Login is successfull</div>";
         header("Location:../View/index.php");

        }
    else{
        $_SESSION["error"]="Sai tên đăng nhập hoặc mật khẩu!!";
    }
    }else{
        $_SESSION['empty']="Chưa nhập username và password!!";
    }

}