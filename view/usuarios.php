<?php
session_start();
if(isset($_SESSION['usuario'])){
    ?>
<?php
}else{
    header("location:../index.php");
}?>