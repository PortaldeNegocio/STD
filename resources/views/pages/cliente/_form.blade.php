<!-- container -->
<div class="container">

    <!-- content-header has breadcrumbs -->
    <section class="content-header">
    	@if( $cliente->exists )
	        <h1>Modificar Clientes
                <small>Formulario para modificar un cliente</small>
	        </h1>
	        <ol class="breadcrumb">
	            <li><a href="{{ route('cliente.index') }}"><i class="fa fa-dashboard"></i>Cliente</a></li>
	            <li class="active">Editar Cliente</li>
	        </ol>
	    @else
			<h1>Nuevo Cliente
	            <small>Formulario para ingresar nuevo cliente</small>
	        </h1>
	        <ol class="breadcrumb">
	            <li><a href="{{ route('cliente.index') }}"><i class="fa fa-dashboard"></i>Cliente</a></li>
	            <li class="active">Crear Cliente</li>
	        </ol>
	    @endif
    </section>
    <!-- end content-header section -->

    <!-- content -->
    <section class="content">
        
        <div class="col-xs-offset-3 col-xs-6">  			
		
			@if( $cliente->exists )
			{{-- Se actualiza si el cliente existe --}}	
				 {!! Form::model($cliente, [
					'route' => ['cliente.update', $cliente->id],
					'method' => 'PUT'
				]) !!}
				
			@else

				{{-- Crear nuevo registro si el cliente no existe --}}	
				 {!! Form::open([
					'route' => ['cliente.store', $cliente],
					'method' => 'POST'
				]) !!}				
					
			@endif

			<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
			<div class="form-group">
				{!! Form::label('TipoDocumento', 'Tipo Documento:') !!}	      
			        {!! Form::select('TipoDocumento', 
						[
							'Cedula'    => 'Cédula',
							'RUC'       => 'Ruc',
							'Pasaporte' => 'Pasaporte'                
						],
						null,
						[
							'class' => 'form-control'
						]
					) !!}  
			</div>
			<div class="form-group">
				{!! Form::label('NumeroDocumento', 'No. Documento:') !!}
				{!! Form::text('NumeroDocumento', null, 
					[
						'id'		  => 'NumeroDocumento',
						'class'       => 'form-control', 
						'placeholder' => 'No Documento',
						'required'
				]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Nombre', 'Nombre:') !!}
				{!! Form::text('Nombre', null, 
					[
						'id'		  => 'Nombre',
						'class'       => 'form-control', 
						'placeholder' => 'Nombre',
						'required'
				]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Apellido', 'Apellido:') !!}
				{!! Form::text('Apellido', null, 
					[
						'id'		  => 'Apellido',
						'class'       => 'form-control', 
						'placeholder' => 'Apellido',
						'required'
				]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Direccion', 'Dirección:') !!}
				{!! Form::text('Direccion', $cliente->Direccion, 
					[
						'class'       => 'form-control', 
						'placeholder' => 'Dirección'
						
				]) !!}
			</div>
			<div class="form-group">
				 {{ Form::hidden('StrTelefonos','' , array(
			 						'id' => 'inputArray',
			 						'class' => 'form-control')) }}

				{!! Form::label('telefono', 'Teléfono:',  
				[
					'style' =>' display: block;'
				]
				) !!}
				 {!! Form::select('inputTipoTelefono', 
						[
							'Personal'   => 'Personal',
							'Domicilio'  => 'Domicilio',
							'Trabajo'    => 'Trabajo'    ,
							'Emergencia' => 'Emergencia'    				            
						],
						null,
						[
							'id' => 'inputTipoTelefono',
							'class' => 'form-control',
							'style' =>'  width: 20%; display: inline-block;'
						]
					) !!}
				{!! Form::text('inputNumeroTelefono', null, 
					[
						'id'=> 'inputNumeroTelefono',
						'class'       => 'form-control', 
						'placeholder' => 'Numero de Telefono',
						'style'       => 'width: 40%; display: inline-block;'
						
				])!!}


				<a href="#" id="agregarTelefono" >
					<span id="labelAgregarTelefono" class="icon-trash-o btn btn-default", style="width: 18%" >Agregar</span>
				</a>
				<a href="#" id="eliminarTelefono" >
					<span id="labelEliminarTelefono" class="icon-trash-o btn btn-default", style="width: 18%">Eliminar</span>
				</a>
			</div>
			<div class="form-group">      
				<table id="TableRecord"  class="table table-hover table-strip gridlist" >
					<thead>
						<tr>
							<th>Tipo Telefono</th>
							<th>Numero</th>
						</tr>
					</thead>
					<tbody id="tableTelefono">
						@foreach ($cliente->telefonos as $telefono)
							<tr>
								<td class="id" style="display:none;">{{ $telefono->id }}</td>
								<td class="tipo">{{ $telefono->TipoTelefono }}</td>
								<td class="dato">{{ $telefono->Numero }}</td>
								<td class="deleted" style="display:none;">false</td>
							</tr>
					 	@endforeach
					</tbody>
				</table>
			</div>

			<div class="form-group">
				<a id="buttonNuevo" class="headgrid__enlace btn btn-warning" href="{{ route('cliente.index') }}">
					Cancelar
				</a>


				<a id="buttonAjaxGet" class="headgrid__enlace btn btn-warning" href="{{ route('cliente.index') }}">
					Cancelar AJX
				</a>

			@if( $cliente->exists )
				{!! Form::submit( 
					'Actualizar',
					[
						'class' => 'btn btn-success',
						'style' => 'aligme'

				]) !!}
			@else
				{!! Form::submit( 
					'Guardar',
					[
						'class' => 'btn btn-success',
						'style' => 'aligme'

				]) !!}
			@endif


			</div>
				
			<!-- <div>
			  	<a href="#" class="btn-guardar  btn-primary">
					<span class="icon-trash-o">Guardar</span>
				</a>
			</div> -->
	    </div>
    
    </section>
    <!-- end content section -->

</div>
<!-- end container -->


			