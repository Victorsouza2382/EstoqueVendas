<?php 

	include "../../classes/conexao.php";
	include "../../classes/usuarios.php";

	$obj= new usuarios;

	echo json_encode($obj->obterDados($_POST['idusuario']));

 ?>