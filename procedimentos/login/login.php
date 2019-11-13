<?php

session_start();

include_once "../../classes/conexao.php";
include_once "../../classes/usuarios.php";


$obj = new usuarios();


$dados = array(

    $_POST['email'],
    $_POST['senha']


);


echo $obj->login($dados);

?>