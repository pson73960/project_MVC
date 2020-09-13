<?php
session_start();
//session_destroy();
$title="Web bán game";
include  'header.php';
include '../config/connect_database.php';
include '../Model/model.php'?>
<br>

    <?php
    include 'content.php';
    include 'footer.php';
    ?>
</div>

</body>
</html>