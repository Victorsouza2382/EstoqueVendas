<?php

include_once "../../classes/conexao.php";
include_once "../../classes/usuarios.php";

$obj = new usuarios;

echo json_encode($obj->obterDados($_POST['idusuario']));

?>