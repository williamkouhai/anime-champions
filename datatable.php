     <?php
          session_start();
      include 'verificar_login.php';
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/datatable.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>datatable</title>

</head>
<body>
	<section>
		<!--for demo wrap-->
		<h1>Tabela de Lutadores</h1>
		<div class="tbl-header">
		  <table cellpadding="0" cellspacing="0" border="0">
			<thead>
			  <tr>
				<th>ID</th>
				<th>Nome do Lutador</th>
				<th>Nota</th>
				<th>Semestre</th>
				<th>Ação</th>
			  </tr>
			</thead>
		  </table>	  
		</div>

		<div class="tbl-content">
		  <table cellpadding="0" cellspacing="0" border="0">
			<tbody>
			  
<?php

	include 'conexao.php'; //<!---incluir conexao-->
	$sql = "SELECT * FROM `lutadores`"; //<!--selecionar na tabela-->
	$busca = mysqli_query($conexao,$sql); //<!--buscar no banco-->

		//<!--laço para listar todos os lutadores-->
		while ($array = mysqli_fetch_array($busca)) {
	//	<!--laço para listar todos os atributos por sequencia-->
			$id = $array['id']; 
			$nome = $array['nome'];
			$nota = $array['nota'];
			$mes = $array['mes'];
			?>
<tr>
		  <!--html para receber o laço-->
		<td> <?php echo $id ?> </td>
		<td> <?php echo $nome ?> </td>
		<td> <?php echo $nota ?> </td>
		<td> <?php echo $mes ?> </td>
		<td>
		<a class="btn btn-danger" href="deletar_lutadores.php?id=<?php echo $id?>" role="button">Deletar</a>
			<a class="btn btn-warning" href="editar_lutadores.php?id=<?php echo $id?>" role="button">Editar</a>
		</td> <!--- colocar php editar no href-->
		
<?php } ?>

			  </tr>		 
			</tbody>
		  </table>
		</div>
	  </section>
	  
	  
	  <!-- follow me template -->
	  <div class="made-with-love">
		Made with
		<i>♥</i> by
		<a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
	  </div>
</div>
<script>
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
</body>
</html>