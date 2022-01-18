<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1>Usuarios Cadastrados</h1>
<?php 
require_once "conexao.php";

$registros = [];
$conexao = novaConexao();

if ($_GET['excluir']){
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
    $stmt = $conexao->prepare($excluirSQL);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$sql = "SELECT id, nome, nascimento, email FROM cadastro";
$resultado = $conexao->query($sql);
if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
} elseif($conexao->error){
    echo "Erro: " . $conexao->error;
}
$conexao->close;
?>

<table class="table table-hover table-striped">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
     <?php foreach($registros as $registro) : ?>
        <tr>
            <td><?= $registro['id'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td><?= $registro['email'] ?></td>
            <td><?= $registro['nascimento'] ?></td>
            <td>
                <a href="/listar.php?dir=db&file=listar&excluir=<?= $registro['id']?>" 
                class="btn btn-danger">excluir</a>
            </td>
        </tr>
     <?php endforeach ?>   
    </tbody>
</table>  
<a href="index.php"> Voltar </a>
<style>
    table > * {
        font-size: 1.2rem;
    }
</style>