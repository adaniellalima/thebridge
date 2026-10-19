<?php
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$nasc = $_POST["nasc"];
$sexo = $_POST["sexo"];
$telefone = $_POST["telefone"];

require "conexao.php";
$comando ="update usuario set email='$email', senha='$senha', cpf='$cpf', nome='$nome', nasc='$nasc', sexo='$sexo', telefone='$telefone' where id_usuario='$id_produto'";
$resultado = mysqli_query($conexao, $comando);
if($resultado == true){
    echo "$nome alterado com sucesso";
}else{
    echo "Não foi possível alterar o registro";
}

?>