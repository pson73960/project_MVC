<?php
include '../config/connect_database.php';
include '../Model/model.php';
session_start();
if(isset($_POST['save']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $nxx = $_POST['nxx'];
    $sl=$_POST['sl'];
    $n=new model();
    $r=$n->insert($name,$price,$image,$nxx,$sl);
    if ($r){
        $_SESSION['ok']="Thêm mới thành công!!";
        header("Location:admin.php");
    }
    else{echo "error: ".$r;}
}