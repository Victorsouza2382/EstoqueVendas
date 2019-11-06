
<?php 
	session_start();
	if(isset($_SESSION['usuario'])){


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Início</title>
	<?php include_once "menu.php" ?>
</head>
<body>

</body>
</html>


<?php 
} else{
	header("location:../index.php");
}

 ?>
