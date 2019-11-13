<?php

include_once "../../classes/conexao.php";
include_once "../../classes/produtos.php";

$obj = new produtos();

$idpro = $_POST['idproduto'];

echo $obj->excluir($idpro);

?>