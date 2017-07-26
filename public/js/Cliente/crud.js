$(document).on('click','.headgrid__enlace', function(e){
	e.preventDefault();
	var page = $(this).attr('href');
	
//	alert(page);

	$.ajax({
		url:page,
		type: 'GET',
		dataType: 'json',
		data: {},
		success: function(data){
		//console.log(data);

			$(".clientes").html(data);

		}
	});
});

//Open Modal
  $(document).on('click','.open_modal',function(){
 		var url = "http://localhost:8000/cliente";
        var clienteId = $(this).val();
		alert(clienteId);

        $.get(url + '/' + clienteId, function (data) {
            //success data
            console.log(data);
            $('#id').val(data.id);
            $('#TipoDocumento').val(data.TipoDocumento);
            $('#NumeroDocumento').val(data.NumeroDocumento);
            $('#Nombre').val(data.Nombre);
            $('#Apellido').val(data.Apellido);           
            $('#btn-save').val("update");
            $('#myModal').modal('show');
        }) 
   });


//DELETE CON AJAX
	$('.btn-delete').click(function(e){
		e.preventDefault();

		var row = $(this).parents('tr');
		var form = $(this).parents('form');
		var url = form.attr('action');
		
		//alert(url);
		

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


//GET ALL PHONES
function getAllPhone(){
	var json ="", jsonRow ="";
	$("#tableTelefono tr").each(function(){
		json+=",{"
   		$(this).find("td").each(function () {
    		$this=$(this);
      		jsonRow+=',"'+$this.attr("class")+'":"'+$this.html()+'"';
   		});
		json+= jsonRow.substr(1)+"}";
	});
   obj= JSON.parse('['+json.substr(1)+']');
	return obj;
};


//CREATE CON AJAX
$('.btn-guardar').click(function(e){
		e.preventDefault();

		var row = $(this).parents('tr');
		var form = $(this).parents('form');
		var route = form.attr('action');
		var token = $("#token").val();

 		var formData = {
			TipoDocumento: $("#TipoDocumento").val(),
			NumeroDocumento: $('#NumeroDocumento').val(),
			Nombre: $('#Nombre').val(),
			Apellido: $('#Apellido').val(),
			Telefonos: getAllPhone(),
        };

		// console.log(formData);
	$.ajax({
		url: route,
		headers: { 'X-CSRF-TOKEN': token},		
		type: 'POST',
		dataType: 'json',
		 data: formData,
        success: function(data) {
                console.log("");
            }
	});

	});

//UPDATE CON AJAX
$('#actualizar').click(function(e){
		e.preventDefault();

/*		var row = $(this).parents('tr');
		var form = $(this).parents('form');
		var route = form.attr('action');*/
		var token = $("#token").val();
		var clienteId = $("#id").val();

		var route = "http://localhost:8000/cliente";
  		route += '/' + clienteId;

 		var formData = {
			TipoDocumento: $("#TipoDocumento").val(),
			NumeroDocumento: $('#NumeroDocumento').val(),
			Nombre: $('#Nombre').val(),
			Apellido: $('#Apellido').val(),
        };

      
 console.log(route);
	//	alert(token);
		 console.log(formData);

		 console.log(token);
		  console.log(route);
	$.ajax({
		url: route,
		headers: { 'X-CSRF-TOKEN': token},		
		type: 'PUT',
		dataType: 'json',
		 data: formData,
        success: function(data) {
                 console.log(data);
                   $('#myModal').modal('hide')
            },
            error: function (data) {
                console.log('Error:', data);
            }
	});

});

$(document).on('click','.pagination a', function(e){
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = "http://localhost:8000/cliente";

	$.ajax({
		url:route,
		type: 'GET',
		dataType: 'json',
		data: {page:page},
		success: function(data){
			$(".clientes").html(data);
		}
	});
});
