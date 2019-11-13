<?php

include_once "../../classes/conexao.php";
include_once "../../classes/clientes.php";


$obj = new clientes();

echo json_encode($obj->obterDadosCliente($_POST['idcliente']));


?>

