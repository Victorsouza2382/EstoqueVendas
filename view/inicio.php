<?php
session_start();
if (isset($_SESSION['usuario'])) {


    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Início</title>
        <?php include_once "menu.php" ?>
        <link rel="stylesheet" href="../css/myInfo.css">
    </head>
    <body>
    <div id="myInfo1">
        <img src="../img/myInfo.jpg">
    </div>

    </body>
    </html>


    <?php
} else {
    header("location:../index.php");
}

?>
