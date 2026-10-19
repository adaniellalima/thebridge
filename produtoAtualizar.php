<?php
$id_produto = $_POST["id_produto"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$fichatecnica = $_POST["fichatecnica"];
$categoria = $_POST["categoria"];
$imagem = $_POST["imagem"];

require "conexao.php";
$comando ="update produto set descricao='$descricao', preco='$preco', fichatecnica='$fichatecnica', categoria='$categoria', imagem='$imagem' where id_produto='$id_produto'";
$resultado = mysqli_query($conexao, $comando);
if($resultado == true){
    echo "$descricao alterado com sucesso";
}else{
    echo "Não foi possível alterar o registro";
}

?>