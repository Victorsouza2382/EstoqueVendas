<?php

include_once "../../classes/conexao.php";
include_once "../../classes/usuarios.php";

$obj = new usuarios;

$dados = array(
    $_POST['idUsuario'],
    $_POST['nomeU'],
    $_POST['usuarioU'],
    $_POST['emailU']
);
echo $obj->atualizar($dados);


?>