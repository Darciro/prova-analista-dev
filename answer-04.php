<?php require_once 'inc/header.php'; ?>
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
						Lista de tarefas <small>(Clique e arraste para reordenar)</small>
					</div>
				</div>

				<div>
					<form>
					<table class="table tasks-table">
						<thead>
						<tr>
							<th class="checkbox-header"><input type="checkbox" value=""></th>
							<th>Prioridade</th>
							<th>Título</th>
							<th>Descrição</th>
						</tr>
						</thead>
						<tbody class="sortable">
						<tr class="loading">
							<td colspan="4">Carregando as tarefas</td>
						</tr>
						</tbody>
						<tfoot>
							<tr>
								<td>
									<button id="add-task" type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
									</button>
								</td>
								<td>
									<div class="form-group">
										<label for="priority" class="sr-only">Prioridade</label>
										<input type="number" class="form-control input-sm" id="priority" placeholder="Prioridade">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="title" class="sr-only">Título</label>
										<input type="text" class="form-control input-sm" id="title" placeholder="Título">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label for="desc" class="sr-only">Descrição</label>
										<input type="text" class="form-control input-sm" id="desc" placeholder="Descrição">
									</div>
								</td>
							</tr>
						</tfoot>
					</table>
					</form>
				</div>


				<div class="well text-right task-options">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-success disabled">Concluir tarefa</button>
						<button id="edit-task" type="button" class="btn btn-primary disabled">Editar</button>
						<button id="delete-task" type="button" class="btn btn-danger disabled">Deletar</button>
					</div>
				</div>
			</div>
		</div>
<?php require_once 'inc/footer.php'; ?>