 <!-- content-wrapper -->    

    <!-- content-header has breadcrumbs -->
    <section class="content-header">
        <h1>
            Clientes
            <small>Todos los registros de clientes</small>
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Clientes</li>
        </ol>

    </section>
    <!-- end content-header section -->

    <!-- content -->
    <section class="content">

        <!-- Your Page Content Here -->
		<div class="headgrid">
			<div class="pull-right">
				<a id="buttonAjaxGet" class="headgrid__enlace leer-mas" href="{{ route('cliente.create') }}">
					<span class="icon-plus-square"></span> Nuevo
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<table id="dataTableNet" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="sorting_asc">No. Documento</th>
                    <th class="sorting">Nombre</th>
                    <th>Apellido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $item)
                    <tr>
                        <td> {{ $item->NumeroDocumento }} </td>
                        <td> {{ $item->Nombre }} </td>
		                <td> {{ $item->Apellido }} </td>
		                <td>
							{!! Form::open([
		                                    'route' => ['destroyByAjax', $item->id],
		                                    'method' => 'DELETE',
		                                    'class' => 'formaccion'			            
			                                ]) !!}

		        	            <a href="#" class="btn-show btntabla" >
									<span class="icon-eye"></span>
								</a>
		                    {!! Form::close() !!}
									
		                    <a id="buttonAjaxGet" href="{{ route('cliente.edit',$item->id) }}" class="btn-edit btntabla">
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
		{!! $clientes->render() !!}

    </section>
    <!-- end content section -->

    

<!-- end content-wrapper -->
