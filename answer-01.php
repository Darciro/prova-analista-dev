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
			<h3>Questão 01</h3>
			<p>Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos de ambos (3 e 5), imprima “FizzBuzz”.</p>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">
						Código PHP
					</div>
				</div>

				<figure class="highlight">
					<?php highlight_file( 'source-code/source-01.php' ); ?>
				</figure>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">
						Resultado gerado
					</div>
				</div>

				<?php
				for ($x = 1; $x <= 100; $x++) {
					if($x % 3 == 0 && $x % 5 == 0){
						echo "FizzBuzz <br>";
					}elseif($x % 3 == 0){
						echo "Fizz <br>";
					}
					elseif($x % 5 == 0){
						echo "Buzz <br>";
					}
					else{
						echo "$x <br>";
					}
				}
				?>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>