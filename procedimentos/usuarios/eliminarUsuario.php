<?php

include_once "../../classes/conexao.php";
include_once "../../classes/usuarios.php";

$obj = new usuarios;

echo $obj->excluir($_POST['idusuario']);

?>