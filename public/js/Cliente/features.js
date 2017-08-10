


function setDataTable(){
 $('#dataTableNet').DataTable();
};

$(document).on('change', '#provincia', function(e){
	$("#canton").empty();
	$("#parroquia").empty();
    $.get("getCantones/"+e.target.value+"",function(response){
        //console.log(response);
    $("#canton").append("<option  selected='true' value='0'>Seleccione un cantón</option>");
        for(i=0;i<response.length; i++){
            $("#canton").append("<option value='"+response[i].id+"'>"+response[i].canton+"</option>");
        }
    });
    document.getElementById("canton").selectedIndex = -1;

});

$(document).on('change', '#canton', function(e){
	$("#parroquia").empty();
    $.get("getParroquias/"+e.target.value+"",function(response){
        //console.log(response);
    $("#parroquia").append("<option  selected='true' value='0'>Seleccione una parroquia</option>");

        for(i=0;i<response.length; i++){
            $("#parroquia").append("<option value='"+response[i].id+"'>"+response[i].parroquia+"</option>");
        }
    });

});

function getAllProvincia(){
//$(document).on('click','#provincia', function(e){

	//alert($("#provincia").options.length);
	//if($("#provincia").length ==1){

		var route = "/getProvincias";

		$.ajax({
			url:route,
			type: 'GET',
			dataType: 'json',
			success: function(data){
		    	for(i=0;i<data.length; i++){
		        	$("#provincia").append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");
		    	}		
			},
		    error: function (data) {
		    	alert("error");
		        console.log('Error:', data);
		    }	
		});
	//};
};


//***************** SECTION TELEFONO *****************//
//RESET CONTROL
function resetControlsTelefono(){
	$("#inputArrayTelefono").val(getAllPhone());

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
//***************** FIN SECTION TELEFONO *****************//



//***************** SECTION E-MAIL *****************//
//RESET CONTROL
function resetControlsEmail(){
	$("#inputArrayEmail").val(getAllEmail());

	document.getElementById("inputTipoEmail").selectedIndex = 0;
	$("#inputEmail").val("");
	document.getElementById("labelAgregarEmail").innerHTML="Agregar";
};

//GET ALL EMAIL
function getAllEmail(){
	var json ="", jsonRow ="";
	$("#tableEmail tr").each(function(){
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

//Select Row in EmailTable
$(document).on('click','#tableEmail tr', function(e){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var tipoTelefono=$(this).find('td:nth-child(2)').html(); //td:first
   var numeroTelefono=$(this).find('td:nth-child(3)').html();
	$("#inputTipoEmail").val(tipoTelefono);
	$("#inputEmail").val(numeroTelefono);
	document.getElementById("labelAgregarEmail").innerHTML="Modificar";
});

//BUTTON AGREGAR/MODIFICAR EMAIL
$(document).on('click', '#agregarEmail', function(e){
	e.preventDefault();

	var idEmail;
	var isDeleted = false;
	var tipoEmail = $("#inputTipoEmail").val();
	var email = $("#inputEmail").val();

	if(email){
		if($('#labelAgregarEmail').text()=="Modificar"){
			var trSelected = $("#tableEmail tr.selected");
			idEmail = trSelected.find('td:first').html();

			var indexselec = trSelected.closest("tr").index();
			var node = document.getElementById("tableEmail").rows[indexselec];

 	    	var dataRow="<tr><td class='id' style='display:none;'>"+idEmail+"</td><td  class='tipo' >"+tipoEmail+"</td><td class='dato'>"+email+"</td><td class='deleted' style='display:none;'>"+isDeleted+"</td></tr> ";
 	    	var newRow = document.createElement("tr");
   			newRow.innerHTML=dataRow;
	    	document.getElementById("tableEmail").replaceChild(newRow, node);
	    }
	    else{
 	    	var dataRow="<tr><td class='id' style='display:none;'>"+idEmail+"</td><td  class='tipo' >"+tipoEmail+"</td><td class='dato'>"+email+"</td><td class='deleted' style='display:none;'>"+isDeleted+"</td></tr> ";

 	    	var newRow = document.createElement("tr");
   			newRow.innerHTML=dataRow;
			document.getElementById("tableEmail").appendChild(newRow);
	    };
   };
	
    resetControlsEmail();
});

//BUTTON ELIMINAR EMAIL
$(document).on('click','#eliminarEmail', function(e){
	e.preventDefault();
	var trSelected=	$("#tableEmail tr.selected");

	trSelected.attr("style", "display:none;");
   	var td = trSelected.find('td:nth-child(4)');
	td.html("true");
	
	resetControlsEmail();
});
//***************** FIN SECTION TELEFONO *****************//



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

/*getAllProvincia();
*/
});