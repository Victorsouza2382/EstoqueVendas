<?php
session_start();
include_once "../../classes/conexao.php";
include_once "../../classes/vendas.php";
$c = new conectar();

$obj = new vendas();


if (count($_SESSION['tabelaComprasTemp']) == 0) {
    echo 0;
} else {
    $result = $obj->criarVenda();
    unset($_SESSION['tabelaComprasTemp']);
    echo $result;
}
?>