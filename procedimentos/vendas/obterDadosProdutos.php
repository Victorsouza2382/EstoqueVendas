<?php

include_once "../../classes/conexao.php";
include_once "../../classes/vendas.php";

$obj = new vendas();

echo json_encode($obj->obterDadosProduto($_POST['idproduto']));

?>