//RESET CONTROL
function resetControlsTelefono(){
	$("#inputArray").val(getAllPhone());

	document.getElementById("inputTipoTelefono").selectedIndex = 0;
	$("#inputNumeroTelefono").val("");
	document.getElementById("labelAgregarTelefono").innerHTML="Agregar";
};

//GET ALL PHONES
function getAllPhone(){
	var json ="", jsonRow ="";
	$("#tableTelefono tr").each(function(){
		json+=",{"
		jsonRow ="";
   		$(this).find("td").each(function () {
    		$this=$(this);
      		jsonRow+=',"'+$this.attr("class")+'":"'+$this.html()+'"';
   		});
		json+= jsonRow.substr(1)+"}";
	});
   obj= '['+json.substr(1)+']';
	return obj;
};


function setDataTable(){
 $('#dataTableNet').DataTable();
};


//Select Row in TelefonoTable
$(document).on('click','#tableTelefono tr', function(e){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var tipoTelefono=$(this).find('td:nth-child(2)').html(); //td:first
   var numeroTelefono=$(this).find('td:nth-child(3)').html();
	$("#inputTipoTelefono").val(tipoTelefono);
	$("#inputNumeroTelefono").val(numeroTelefono);
	document.getElementById("labelAgregarTelefono").innerHTML="Modificar";
});

//BUTTON AGREGAR/MODIFICAR TELEFONO
$(document).on('click', '#agregarTelefono', function(e){
	e.preventDefault();

	var idTelefono;
	var isDeleted = false;
	var tipoTelefono = $("#inputTipoTelefono").val();
	var numeroTelefono = $("#inputNumeroTelefono").val();

	if(numeroTelefono){
		if($('#labelAgregarTelefono').text()=="Modificar"){
			var trSelected = $("#tableTelefono tr.selected");
			idTelefono = trSelected.find('td:first').html();

			var indexselec = trSelected.closest("tr").index();
			var node = document.getElementById("tableTelefono").rows[indexselec];

 	    	var dataRow="<tr><td class='id' style='display:none;'>"+idTelefono+"</td><td  class='tipo' >"+tipoTelefono+"</td><td class='dato'>"+numeroTelefono+"</td><td class='deleted' style='display:none;'>"+isDeleted+"</td></tr> ";
 	    	var newRow = document.createElement("tr");
   			newRow.innerHTML=dataRow;
	    	document.getElementById("tableTelefono").replaceChild(newRow, node);
	    }
	    else{
  	    	var dataRow="<tr><td class='id' style='display:none;'>"+idTelefono+"</td><td  class='tipo' >"+tipoTelefono+"</td><td class='dato'>"+numeroTelefono+"</td><td class='deleted' style='display:none;'>"+isDeleted+"</td></tr> ";

 	    	var newRow = document.createElement("tr");
   			newRow.innerHTML=dataRow;
			document.getElementById("tableTelefono").appendChild(newRow);
	    };
   };
	
    resetControlsTelefono();
});

//BUTTON ELIMINAR TELEFONO
$(document).on('click','#eliminarTelefono', function(e){
	e.preventDefault();

	//$("#tableTelefono tr.selected").remove();
	var trSelected=	$("#tableTelefono tr.selected");

	trSelected.attr("style", "display:none;");
   	var td = trSelected.find('td:nth-child(4)');
	//alert(td.html());
	td.html("true");
	//td.find('.isDeleted').prop('checked', true);
	
	resetControlsTelefono();
});

//NAVEGACION CON AJAX
$(document).on('click','#buttonAjaxGet', function(e){
	e.preventDefault();
	var route = $(this).attr('href');

	$.ajax({
		url:route,
		type: 'GET',
		dataType: 'json',
		success: function(data){
			$(".content-wrapper").html(data);
			setDataTable();
		},
        error: function (data) {
        	alert("error");
            console.log('Error:', data);
        }	
	});
});


$(document).ready(function() {
setDataTable();
});