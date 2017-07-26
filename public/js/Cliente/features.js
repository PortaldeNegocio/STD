$(document).ready(function(){
	$('#alert').hide();



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
function resetControlsTelefono()
{
	document.getElementById("inputTipoTelefono").selectedIndex = 0;
	$("#inputNumeroTelefono").val("");
	document.getElementById("labelAgregarTelefono").innerHTML="Agregar";
//	document.getElementById("blockEliminarTelefono").visible  = true;
};

//Button agregar/modificar telefono
$('#agregarTelefono').click(function(e){
	e.preventDefault();

	var idTelefono;
	var tipoTelefono = $("#inputTipoTelefono").val();
	var numeroTelefono = $("#inputNumeroTelefono").val();

	if(numeroTelefono){
		if($('#labelAgregarTelefono').text()=="Modificar"){
			var trSelected = $("#tableTelefono tr.selected");
			idTelefono = trSelected.find('td:first').html();

			var indexselec = trSelected.closest("tr").index();
			var node = document.getElementById("tableTelefono").rows[indexselec];

 	    	var dataRow="<tr><td class='id' style='display:none;'>"+idTelefono+"</td><td  class='tipo' >"+tipoTelefono+"</td><td class='dato'>"+numeroTelefono+"</td></tr>";
 	    	var newRow = document.createElement("tr");
   			newRow.innerHTML=dataRow;
	    	document.getElementById("tableTelefono").replaceChild(newRow, node);
	    }
	    else{
 	    	var dataRow="<tr><td class='id' style='display:none;'>"+idTelefono+"</td><td  class='tipo' >"+tipoTelefono+"</td><td class='dato'>"+numeroTelefono+"</td></tr>";
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

	$("#tableTelefono tr.selected").remove();




/*	var selectedIndex = document.getElementById("allTelefono").selectedIndex;
	if(selectedIndex!=-1)
	{
		var selectedOption = document.getElementById("allTelefono").remove(selectedIndex);
	}
*/

	resetControlsTelefono();
	});

})