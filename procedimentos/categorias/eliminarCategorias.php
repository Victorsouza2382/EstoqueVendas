<?php


include_once "../../classes/conexao.php";
include_once "../../classes/categorias.php";

$id = $_POST['idcategoria'];

$obj = new categorias();
echo $obj->excluirCategoria($id);

?>