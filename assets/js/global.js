(function($){
	$(document).ready(function () {
		// Update this URL to match the project URL
		var root_url = 'http://localhost/prova-analista-dev/api';

		renderList();
		function renderList(data) {
			var tasksTable = $('.tasks-table');
			tasksTable.find('.sortable').sortable({
				placeholder: "ui-state-highlight"
			});
			$('body').css('min-height', $('body').height() );
			tasksTable.find('tr.loading').hide();
			tasksTable.find('tbody tr').not('.loading').remove();
			// GET Method to retrieve all tasks
			$.ajax({
				url: root_url + '/tasks/',
				dataType: 'json',
				type: 'GET'
			})
			.done(function(data){
				$.each($.parseJSON(data), function(i, row) {
					var completed = (row.task_completed == 1 ? "task-completed" : "");
					tasksTable.find('tbody').append(
						'<tr data-task-id="'+ row.id +'" class="'+ completed +'">' +
							'<td><input type="checkbox" value="">' +
							'<td>'+ row.task_priority +'</td>' +
							'<td>'+ row.task_name +'</td>' +
							'<td>'+ row.task_desc +'</td>' +
						'</tr>'
					);
				});
			});
		};

		$('.tasks-table').find('.sortable').on('sortstop', function( event, ui ) {
			var task_id = $(ui.item).data('task-id'),
				prevPrior = $(ui.item).prev('tr').find('td:eq(1)').text();

			if( prevPrior ){
				task_priority = parseInt(prevPrior) + 1;
			}else{
				task_priority = 1;
			}

			// PUT Method to update a task based on it's ID
			$.ajax({
				url: root_url + '/tasks/' + '?' + $.param({
					update: true,
					task_id: task_id,
					task_priority: task_priority
				}),
				dataType: 'json',
				type: 'PUT'
			})
			.done(function(){
				renderList();
			})
			.error(function(e){
				console.log('Error', e);
			});
		} );


		$('#add-task').on('click', mantainTask);
		function mantainTask(){
			var errors = false;
			if( !$('#priority').val().length || !$('#title').val().length ){
				errors = true;
			}

			if( errors ){
				$('#priority, #title').parent().addClass('has-error');
			}else{
				$('#priority, #title').parent().removeClass('has-error');
				var task_name = $('#title').val(),
					task_desc = $('#desc').val(),
					task_priority = $('#priority').val();

				// POST Method to create a new task
				if( $('#add-task').hasClass('update') ){
					var task_id = $('.tasks-table tbody input[type=checkbox]:checked').first().closest('tr').addClass('editing').data('task-id')
					// PUT Method to update a task based on it's ID
					$.ajax({
						url: root_url + '/tasks/' + '?' + $.param({
							task_id: task_id,
							task_name: task_name,
							task_desc: task_desc,
							task_priority: task_priority
						}),
						dataType: 'json',
						type: 'PUT'
					})
					.done(function(data){
						renderList();
						$('#edit-task').text('Edição');
						$('.tasks-table tfoot tr').find('input').val('');
						$('#add-task').removeClass('update').html('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>');
					})
					.error(function(e){
						console.log('Error', e);
					});
				}else{
					$.ajax({
						url: root_url + '/tasks/',
						dataType: 'json',
						data: {
							task_name: task_name,
							task_desc: task_desc,
							task_priority: task_priority
						},
						type: 'POST'
					})
					.done(function(data){
						renderList();
						$('#title, #desc, #priority').val('');
					});
				}
			}
		}

		$('#delete-task').on('click', function(){
			bootbox.confirm("Confirma a exclusão da tarefa?", function(result) {
				if( result == true ){
					var task_ids = [];
					$.each( $('.tasks-table tbody input[type=checkbox]:checked'), function(){
						task_ids.push( $(this).closest('tr').data('task-id') );
					});
					// DELETE Method to erase a task based on it's ID
					$.ajax({
						url: root_url + '/tasks/' + '?' + $.param({task_ids: task_ids}),
						dataType: 'json',
						type: 'DELETE'
					})
					.done(function(data){
						renderList();
					})
					.error(function(e){
						console.log('Error', e);
					});
				}
			});
		});

		$('#edit-task').on('click', function(){
			$(this).toggleClass('editing');

			var priority = $('.tasks-table tbody input[type=checkbox]:checked').first().closest('tr').find('td:eq(1)').text(),
				title = $('.tasks-table tbody input[type=checkbox]:checked').first().closest('tr').find('td:eq(2)').text(),
				desc = $('.tasks-table tbody input[type=checkbox]:checked').first().closest('tr').find('td:eq(3)').text();

			if( $(this).hasClass('editing') ){
				$('#edit-task').text('Concluir edição');
				$('.tasks-table tbody input[type=checkbox]').not('input[type=checkbox]:checked').attr('disabled', 'disabled');
				$('.tasks-table tfoot tr').find('td:eq(1) input').val(priority);
				$('.tasks-table tfoot tr').find('td:eq(2) input').val(title);
				$('.tasks-table tfoot tr').find('td:eq(3) input').val(desc);
				$('#add-task').removeClass('btn-default').addClass('update btn-success').html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
			}else{
				$('#edit-task').text('Edição');
				$('.tasks-table tbody input[type=checkbox]').removeAttr('disabled');
				$('.tasks-table tfoot tr').find('input').val('');
				$('#add-task').addClass('btn-default').removeClass('update btn-success').html('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>');
			}
		});

		$('.checkbox-header input[type=checkbox]').on('click', toggleAllCheckboxes);
		function toggleAllCheckboxes(){
			if( $(this).prop('checked') ){
				$('.tasks-table input[type=checkbox]').prop( "checked", true );
			}else{
				$('.tasks-table input[type=checkbox]').prop( "checked", false );
			}
			enableOptions();
		};

		$('.tasks-table').on('click', 'tbody input[type=checkbox]', enableOptions);
		function enableOptions(){
			if( $('.tasks-table tbody input[type=checkbox]:checked').length ){
				$('.task-options').find('.btn').removeClass('disabled');
			}else{
				$('.task-options').find('.btn').addClass('disabled');
			}
		}
	});
})(jQuery);