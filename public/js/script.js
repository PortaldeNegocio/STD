$(document).ready(function(){

	if ($('#page_clientes')) {
		
		$menu_item = $('#menu_clientes');
		$menu_item_enlace = $('#menu_clientes a');		
		$menu_padre = $menu_item.parents('li');

		$menu_item.addClass('active');
		$menu_padre.addClass('active');
		$menu_item_enlace.addClass('menu_activo');	

	}

});