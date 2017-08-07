$(document).ready(function(){
	/*********************************************
	código para detectar en que opción del menu nos encontramos
	**********************************************/
	/*se obtiene lo que tiene el id del body*/
	$menu_referencia = $('body').attr('id');

	if ($menu_referencia != "") {
		/*se concatena para añadir # al valor del id*/
		$concatenar = "#" + $menu_referencia;
		/*hacemos referencia al id que se encuentra en el li*/
	 	$menu_item_li = $('li' + $concatenar);
	 	/*hecemos referencia a la etiqueta a hijo del li*/ 	
	 	$menu_item_enlace = $menu_item_li.children('a');
	 	/*hacemos referencia a la etiqueta li padre*/
	 	$menu_padre = $menu_item_li.parents('li');
	 	/*añadimos las clases respectivas*/
	 	$menu_item_li.addClass('active');
	 	$menu_padre.addClass('active');
	 	$menu_item_enlace.addClass('menu_activo');
	}	
	
});
		
