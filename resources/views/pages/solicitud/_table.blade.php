 <!-- content-wrapper -->    

    <!-- content-header has breadcrumbs -->
    <section class="content-header">
        <h1>
            Solicitudes de Estudio
            <small>Se muestran todas las solicitudes de Estudio</small>
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Solicitud</li>
        </ol>
    </section>
    <!-- end content-header section -->

    <!-- content -->
    <section class="content">

        <!-- Your Page Content Here -->
		<div class="headgrid">
			<div class="pull-right">
				<a id="buttonAjaxGet" class="headgrid__enlace leer-mas" style="margin-bottom: 7px;" href="{{ route('solicitud.create') }}">
					<span class="icon-plus-square"></span> Nuevo
				</a>
			</div>
		</div>


		<div class="clearfix"></div>


        <!-- v-model => crea un enlace al atributo value -->
        <!-- v-bind: => crea un enlace al atributo htm, ejm. class or style -->

		<div id="tabs"  >
			<div>
				<input type="text" placeholder="Buscar" class="form-control" v-model="searchKey">	
			</div>

        <!-- Estructura de las pestañas para colocarle la case active -->
			<ul class="nav nav-tabs collapsed-box">
				<li 
					v-bind:class="[selectedTab == 'En Desarrollo' ? 'active': '']"
					v-on:click.prevent="selectTab('En Desarrollo')">
					<a href ="#tabs-1" >En Desarrollo</a>
				<li 
					v-bind:class="[selectedTab == 'Finalizado' ? 'active': '']"
					v-on:click="selectTab('Finalizado')">
					<a href ="#tabs-2">Finalizadas</a></li>
				<li 
					v-bind:class="[selectedTab == 'Anulado' ? 'active': '']"
					v-on:click="selectTab('Anulado')">
					<a href ="#tabs-3">Anuladas</a></li>
			</ul>

			<div id="tabs-1"  class="box box-primary">
				<table id="dataTableNet" class="table table-bordered table-striped table-hover">
	            <thead>
	                <tr>
	                    <th class="sorting_asc">ID</th>
	                    <th class="sorting">Cliente</th>
	                    <th>Obra</th>
	                    <th>Dirección</th>
	                    <template  v-if="selectedTab == 'En Desarrollo'">
			                    <th>Progreso</th>                   
	    		                <th>&nbsp</th>          
	                    </template>
   	                    <th v-else>Estado</th>          
	                    <th>Acciones</th>
	                </tr>
	            </thead>
	            <tbody>
	                    <tr v-for="item in paginatedSolicitud">
	                        <td> @{{ item.id }} </td>
	                        <td> @{{ item.cliente.Nombre + ' ' + item.cliente.Apellido }} </td>
			                <td> @{{ item.Obra }} </td>
			                <td> @{{ item.Direccion }} </td>
			                <template  v-if="selectedTab == 'En Desarrollo'">
				                <td> 
				                    <div class="progress progress-xs progress-striped active">
				                      	<div class="progress-bar "  v-bind:class="
				                      			[
												item.Progreso >= 1 && item.Progreso <= 24 ? 
				                      				'progress-bar-red' : 
						                      		(item.Progreso >= 25 && item.Progreso <= 49 ? 
						                      			'progress-bar-yellow' :
						                      			(item.Progreso >= 50 && item.Progreso <= 74 ?
						                      				'progress-bar-aqua' : 
						                      				(item.Progreso >= 75 && item.Progreso <= 99 ?
						                      					'progress-bar-primary' : 
						                      					'progress-bar-green'				                      			
						                      				)
						                      			) 
						                      		)
				                      	 		]" v-bind:style= "{ width: item.Progreso + '%' }">
				                      	</div>
				                    </div>
				                </td>

				                
				                <td>
				                    <span v-bind:class="
				                      			[
												item.Progreso >= 1 && item.Progreso <= 24 ? 
				                      				'badge bg-red' : 
						                      		(item.Progreso >= 25 && item.Progreso <= 49 ? 
						                      			'badge bg-yellow' :
						                      			(item.Progreso >= 50 && item.Progreso <= 74 ?
						                      				'badge bg-aqua' : 
						                      				(item.Progreso >= 75 && item.Progreso <= 99 ?
						                      					'badge bg-blue' : 
						                      					'badge bg-green'				                      			
						                      				)
						                      			) 
						                      		)
				                      	 		]"

				                    >@{{ item.Progreso }}%</span>
				                </td>
				            </template>
				            <td v-else>
				            	<span v-bind:class="[selectedTab == 'Finalizado' ? 'label label-success': 'label label-default']">@{{ item.Estado }} </span> 
				            </td>
							<td>
								<a id="buttonAjaxGet" 
									href="#"
									class="btn-edit btntabla">
										<span class="icon-eye"></span>
								</a>										
			                    <a id="buttonAjaxGet"  
			                    href="#" class="btn-edit btntabla">
									<span class="fa fa-apple"></span>
								</a>
								 <a href="#" class="btn-delete btntabla">
										<span class="icon-trash-o"></span>
									</a>
							</td>
		                </tr>            
			    </tbody>
				</table>
  			</div>

  			<div>
  				<ul>
				    <li 
				    	v-for="pageNumber in totalPages" 
				    	v-if="Math.abs(pageNumber - currentPage) < 3 || pageNumber == totalPages - 1 || pageNumber == 0">
				    	<a 
				    		href="#" @click="setPage(pageNumber)"  
				    		:class="{current: currentPage === pageNumber, last: (pageNumber == totalPages - 1 && Math.abs(pageNumber - currentPage) > 3), first:(pageNumber == 0 && Math.abs(pageNumber - currentPage) > 3)}">
				    			@{{ pageNumber +1 }}</a>
				    </li>
				</ul>
  			</div>
<!-- 
			<div>
				<pre> @{{ $data }}	</pre>	</div>
			</div> -->
 
    </section>
    <!-- end content section -->

<!-- end content-wrapper -->
