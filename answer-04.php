<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Prova</title>

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/global.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<h3 class="text-muted"><a href="index.php">Ricardo Carvalho</a></h3>
		</div>

		<div class="jumbotron">
			<h3>Questão 04</h3>
			<p>Desenvolva uma API Rest para um sistema gerenciador de tarefas (inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por prioridade.</p>
			<p>Desenvolver utilizando:</p>
			<ul class="list-group">
				<li class="list-group-item">Linguagem PHP (ou framework CakePHP);</li>
				<li class="list-group-item">Banco de dados MySQL;</li>
			</ul>
			<p>Diferenciais:</p>
			<ul class="list-group">
				<li class="list-group-item">Criação de interface para visualização da lista de tarefas;</li>
				<li class="list-group-item">Interface com drag and drop;</li>
				<li class="list-group-item">Interface responsiva (desktop e mobile);</li>
			</ul>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">
						Código PHP refatorado
					</div>
				</div>

				<div class="api-list-wrapper">
					<ul>
						<li></li>
					</ul>
				</div>

				<figure class="highlight">
					<pre>
					<?php
					// require_once('lib/API.php');
					/*require_once('lib/Database.php');
					$db = Database::getInstance();
					$mysqli = $db->dbConn();
					$sql_query = 'SELECT * FROM tasks ORDER BY task_priority';

					if ($result = $mysqli->query( $sql_query )) {
						while ($obj = $result->fetch_object()) {
							var_dump($obj);
						}
					}*/

					/*$api = new Api;
					$xxx = $api->getTasks();
					var_dump($xxx);*/



					?>

					<?php // highlight_file( 'source-code/source-03-01.php' ); ?>
					</pre>
				</figure>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/global.js"></script>
</body>
</html>