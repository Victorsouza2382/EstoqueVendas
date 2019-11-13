<?php


include_once "../../classes/conexao.php";
include_once "../../classes/categorias.php";


$obj = new categorias();


$dados = array(
    $_POST['idcategoria'],
    $_POST['categoriaU']

);

echo $obj->atualizarCategoria($dados);

?>