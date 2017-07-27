//DELETE CON AJAX
$('.btn-delete').click(function(e){
	e.preventDefault();

	var row = $(this).parents('tr');
	var form = $(this).parents('form');
	var url = form.attr('action');

	$.post(url, form.serialize(), function(result){
		row.fadeOut();
		$('#totalClientes').html(result.total);
		$('#alert').show();
		$('#alert').html(result.message);
	}).fail(function(){
		$('#alert').show();
		$('#alert').html(result.message);
	})
});
