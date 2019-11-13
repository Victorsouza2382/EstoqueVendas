<?php

include_once "../../classes/conexao.php";
include_once "../../classes/fornecedores.php";


$obj = new fornecedores();

echo json_encode($obj->obterDados($_POST['idfornecedor']));


?>

