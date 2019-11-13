<?php


include_once "../../classes/conexao.php";
include_once "../../classes/fornecedores.php";

$id = $_POST['idfornecedor'];

$obj = new fornecedores();
echo $obj->excluir($id);

?>