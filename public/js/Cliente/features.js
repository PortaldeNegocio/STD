

$(document).ready(function(){
	$('#alert').hide();

  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
       buttons: [
        'copy', 'excel', 'pdf'
    ]
    })
  });


//Select Row in TelefonoTable
$("#tableTelefono").on("click", "tr", function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var tipoTelefono=$(this).find('td:nth-child(2)').html(); //td:first
   var numeroTelefono=$(this).find('td:nth-child(3)').html();
	$("#inputTipoTelefono").val(tipoTelefono);
	$("#inputNumeroTelefono").val(numeroTelefono);
	document.getElementById("labelAgregarTelefono").innerHTML="Modificar";
});



//Reset controls
function resetControlsTelefono(){
	$("#inputArray").val(getAllPhone());

	document.getElementById("inputTipoTelefono").selectedIndex = 0;
	$("#inputNumeroTelefono").val("");
	document.getElementById("labelAgregarTelefono").innerHTML="Agregar";
//	document.getElementById("blockEliminarTelefono").visible  = true;
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


//Button agregar/modificar telefono
$('#agregarTelefono').click(function(e){
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


	//Button Eliminar telefono
	$('#eliminarTelefono').click(function(e){
		e.preventDefault();

		//$("#tableTelefono tr.selected").remove();
		var trSelected=	$("#tableTelefono tr.selected");
		trSelected.attr("style", "display:none;");
	   	var td = trSelected.find('td:nth-child(4)');
		
		td.html("true");
		//td.find('.isDeleted').prop('checked', true);
		
		resetControlsTelefono();
	});

})