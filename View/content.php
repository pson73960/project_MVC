<?php
if (isset($_SESSION['success'])) :?>
<p class="text-danger"><?= $_SESSION['success'] ?></p>
<?php endif ; unset($_SESSION['success']) ?>
<div class="content">
    <div class="row">
        <?php
        $n=new model();
        $r=$n->getList();
        while($set=$r->fetch()){
            ?>
            <div class="col-sm-3" style="margin-bottom: 20px" >
                <a href="details.php?view=details&id=<?php echo $set["0"]?>" style="text-decoration: none;color:black">
                    <img src="../images/<?php echo $set["3"] ?>" style = "height: 300px;width: 240px" ></a>
                <h3 class="text-truncate" style="max-width: 290px"><?php echo $set["1"] ?></h3>
                <h3 style="color: red;font-size: 22px;font-weight: bold ">Giá Tiền: <?php echo number_format($set["2"]) ?> VNĐ</h3>
                <a href="details.php?view=details&id=<?php echo $set[0] ?>" class="btn btn-success">Chi Tiết</a>
                <a href="cart.php?id=<?php echo $set[0] ?>" style="margin-left: 20px" class="btn btn-success">Add To Cart</a>
            </div >

        <?php } ?>


    </div>


</div>