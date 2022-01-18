
<?php

require_once "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    filhos INT,
    salario FLOAT,
    senha INT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Tabela criada com Sucesso :) ";   
}else{
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>
<a href="index.php"> Voltar </a>