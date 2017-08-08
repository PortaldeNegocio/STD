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
				<a id="buttonAjaxGet" class="headgrid__enlace leer-mas" href="{{ route('solicitud.create') }}">
					<span class="icon-plus-square"></span> Nuevo
				</a>
			</div>
		</div>

		<div class="clearfix"></div>
		<table id="dataTableNet" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="sorting_asc">ID</th>
                    <th class="sorting">Cliente</th>
                    <th>Obra</th>
                    <th>Dirección</th>
                    <th>Progreso</th>                   
                    <th>&nbsp</th>          
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudEstudios as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> {{ $item->cliente->Nombre }} </td>
		                <td> {{ $item->Obra }} </td>
		                <td> {{ $item->Direccion }} </td>
		                <td> 
		                    <div class="progress progress-xs progress-striped active">
		                      	<div class="progress-bar {{
										$item->Progreso >= 1 && $item->Progreso <= 24 ? 
		                      				'progress-bar-red' : 
				                      		($item->Progreso >= 25 && $item->Progreso <= 49 ? 
				                      			'progress-bar-yellow' :
				                      			($item->Progreso >= 50 && $item->Progreso <= 74 ?
				                      				'progress-bar-aqua' : 
				                      				($item->Progreso >= 75 && $item->Progreso <= 99 ?
				                      					'progress-bar-primary' : 
				                      					'progress-bar-green'				                      			
				                      				)
				                      			) 
				                      		)													
		                      	}} " style="width: {{ $item->Progreso }}%;"></div>
		                    </div>
		                </td>
		                <td>
		                    <span class="badge bg-yellow">{{ $item->Progreso }}%</span>
		                </td>
		                <td>
		                    <a id="buttonAjaxGet" href="{{ route('solicitud.edit',$item->id) }}" 		class="btn-edit btntabla">
									<span class="icon-eye"></span>
							</a>

									
		                    <a id="buttonAjaxGet" href="{{ route('solicitud.edit',$item->id) }}" class="btn-edit btntabla">
								<span class="icon-pencil"></span>
							</a>
		                                
		                    {!! Form::open([
		                    	            'route' => ['destroyByAjax', $item->id],
		                                    'method' => 'DELETE',
		                                    'class' => 'formaccion'			            
		                                ]) !!}

		                        <a href="#" class="btn-delete btntabla">
									<span class="icon-trash-o"></span>
								</a>
		                    {!! Form::close() !!}
		                    
		                </td>
	                </tr>
	            @endforeach
		    </tbody>
		</table>
		

    </section>
    <!-- end content section -->

    

<!-- end content-wrapper -->
