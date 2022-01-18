
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cad.usuario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body class="cadastro">
	<header class="cabecalho">
		<h1>Escolha opcão desejada</h1>
	</header>
	<main class="principal">
		<div class="conteudo">	
			<form action="cadastro.php" class="btn btn-primary btn-lg"class="form-group col-md-6" >
   				 <button class="btn btn-primary btn-lg" type="submit">cadastrar</button>
  			</form>
			<form action="listar.php" class="btn btn-primary btn-lg"class="form-group col-md-6" >
   				 <button class="btn btn-primary btn-lg" type="submit">listar e excluir</button>
  			</form>
			<form action="alterar.php" class="btn btn-primary btn-lg"class="form-group col-md-6" >
   				 <button class="btn btn-primary btn-lg" type="submit">Alterar</button>
  			</form>
			<form action="banco.php" class="btn btn-primary btn-lg"class="form-group col-md-6" >
   				 <button class="btn btn-primary btn-lg" type="submit">Verificar banco</button>
  			</form> 
			<form action="tabela.php" class="btn btn-primary btn-lg"class="form-group col-md-6" >
   				 <button class="btn btn-primary btn-lg" type="submit">verifica tabela</button>
  			</form> 
			  
			  
		</div>
	</main>
	

	<footer class="rodape">
		 Teste & Zero1 © <?= date('Y'); ?>
	</footer>
	

</body>
