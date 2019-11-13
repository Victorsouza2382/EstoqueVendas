<?php

session_start();
include_once "../../classes/conexao.php";
include_once "../../classes/categorias.php";


$data = date("Y-m-d");
$idusuario = $_SESSION['iduser'];
$categoria = $_POST['categoria'];


$obj = new categorias();


$dados = array(
    $idusuario,
    $categoria,
    $data

);

echo $obj->adicionarCategoria($dados);

?>