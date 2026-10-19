<?php

$conexao = mysqli_connect("localhost", "root", "", "thebridge");

if($conexao == false){
    $erro = mysqli_connect_error();
    die($erro);
}

?>