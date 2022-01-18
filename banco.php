<?php
require_once "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE IF NOT EXISTS dados';

$resultado = $conexao->query($sql);

if($resultado){
    echo "Banco criado com Sucesso :) ";   
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>

<a href="index.php"> Voltar </a>