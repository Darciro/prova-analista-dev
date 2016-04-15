$(document).ready(function () {
	console.log('Fired!');
	function renderList(data) {
		console.log('In the list!');
		var list = data == null ? [] : (data.wine instanceof Array ? data.wine : [data.wine]);

		$('.api-list-wrapper ul li').remove();
		$.each(list, function(index, wine) {
			$('.api-list-wrapper ul').append('<li><a href="#" data-identity="' + wine.id + '">'+wine.name+'</a></li>');
		});
	}

	$.ajax({
		url: 'http://localhost/prova-analista-dev/api/tasks/',
		dataType: 'json',
		type: 'GET'
	})
	.done(function(data){
		console.log('Done!', data);
		renderList(data);
	});
});