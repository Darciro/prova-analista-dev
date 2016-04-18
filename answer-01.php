<?php require_once 'inc/header.php'; ?>
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
<?php require_once 'inc/footer.php'; ?>