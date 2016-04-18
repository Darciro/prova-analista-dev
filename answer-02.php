<?php require_once 'inc/header.php'; ?>
		<div class="jumbotron">
			<h3>Questão 02</h3>
			<p>Refatore o código abaixo, fazendo as alterações que julgar necessário.</p>
			<?php highlight_file( 'source-code/source-02.php' ); ?>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="panel panel-default">
					<div class="panel-body">
						Código PHP refatorado
					</div>
				</div>

				<figure class="highlight">
					<?php highlight_file( 'source-code/source-02-01.php' ); ?>
				</figure>
			</div>
		</div>
	</div>
<?php require_once 'inc/footer.php'; ?>