<?php

session_start();
include_once "../../classes/conexao.php";
include_once "../../classes/clientes.php";


$idusuario = $_SESSION['iduser'];


$obj = new clientes();


$dados = array(
    $idusuario,
    $_POST['nome'],
    $_POST['sobrenome'],
    $_POST['endereco'],
    $_POST['email'],
    $_POST['telefone'],
    $_POST['cpf']

);

echo $obj->adicionarCliente($dados);

?>