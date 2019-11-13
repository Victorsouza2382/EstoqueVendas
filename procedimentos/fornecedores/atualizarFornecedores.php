<?php


include_once "../../classes/conexao.php";
include_once "../../classes/fornecedores.php";


$obj = new fornecedores();


$dados = array(
    $_POST['idfornecedorU'],
    $_POST['nomeU'],
    $_POST['sobrenomeU'],
    $_POST['enderecoU'],
    $_POST['emailU'],
    $_POST['telefoneU'],
    $_POST['cpfU']


);

echo $obj->atualizar($dados);

?>