<!-- container -->
<div class="container">
    <!-- content-header has breadcrumbs -->
    <section class="content-header">
    	@if( $solicitud->exists )
	        <h1>Modificar Solicitud
                <small>Formulario para modificar una solicitud</small>
	        </h1>
	        <ol class="breadcrumb">
	            <li><a href="{{ route('solicitud.index') }}"><i class="fa fa-dashboard"></i>Solicitud</a></li>
	            <li class="active">Editar Solicitd</li>
	        </ol>
	    @else
			<h1>Nueva Solicitud Estudio
	            <small>Formulario para ingresar nueva solicitud de estudio</small>
	        </h1>
	        <ol class="breadcrumb">
	            <li><a href="{{ route('solicitud.index') }}"><i class="fa fa-dashboard"></i>Solicitud</a></li>
	            <li class="active">Crear Solicitud Estudio</li>
	        </ol>
	    @endif
    </section>
    <!-- end content-header section -->

    <!-- content -->
    <section class="content">
        
        <div class="col-xs-offset-3 col-xs-6">  			
		
			@if( $solicitud->exists )
				{{-- Se actualiza si la solicitud existe --}}	
				 {!! Form::model($solicitud, [
					'route' => ['solicitud.update', $solicitud->id],
					'method' => 'PUT'
				]) !!}
				
			@else

				{{-- Crear nuevo registro si la solicitud no existe --}}	
				 {!! Form::open([
					'route' => ['solicitud.store', $solicitud],
					'method' => 'POST'
				]) !!}				
					
			@endif

			<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
			<div class="form-group">
				{!!Form::label('Cliente','Cliente:')!!}
				{!!Form::text('cliente_NumeroDocumento',$solicitud->exists ? $solicitud->cliente->NumeroDocumento : null,
						[
							'id'		  => 'cliente_NumeroDocumento',
							'class'       => 'form-control', 
							'placeholder' => 'Número Documento',
							'required'
						])!!}
				{!!Form::text('cliente_Nombres',$solicitud->exists ? $solicitud->cliente->Apellido .' '. $solicitud->cliente->Nombre: null,
						[
							'id'		  => 'cliente_Nombres',
							'class'       => 'form-control', 
							'placeholder' => 'Nombres',
							'required'
						])!!}
			</div>

			<div class="form-group">
				{!!Form::label('Obra','Obra:')!!}
				{!!Form::text('Obra',null,
						[
							'id'          => 'Obra',
							'class'       => 'form-control', 
							'placeholder' => 'Descripción',
							'required'
						]
				)!!}
			</div>

			<div class="form-group">
				{!! Form::label('Provincia', 'Provincia:') !!}
				{!! Form::select('provincia', 					
						array('' =>'Seleccione una provincia')+$provincia, 
						$solicitud->exists ? $solicitud->parroquia->canton->provincia->id: null,
						[
							'id'    =>	'provincia',
							'class' => 'form-control' 
						]) !!}
			</div>		
			<div class="form-group">
				{!! Form::label('Canton', 'Cantón:') !!}
				{!! Form::select('canton',
						$cantones, 
						$solicitud->exists ? $solicitud->parroquia->canton->id: null,
						[
							'id'		=>	'canton',
							'class'       => 'form-control',
							'placeholder'  => 'Seleccione un cantón'
					]) !!}
			</div>	
			<div class="form-group">
				{!! Form::label('Parroquia', 'Parroquia:') !!}
				{!! Form::select('parroquia',
						$parroquias,
						$solicitud->exists? $solicitud->parroquia->id : null,
					[
						'id'		=>	'parroquia',
						'class'       => 'form-control',
						'placeholder'  => 'Seleccione una parroquia'
				]) !!}
			</div>	


			<div class="form-group">
				{!! Form::label('Direccion', 'Dirección:') !!}
				{!! Form::text('Direccion', $solicitud->Direccion, 
					[
						'class'       => 'form-control', 
						'placeholder' => 'Dirección'
						
				]) !!}
			</div>


			<div class="form-group">
				{!! Form::label('Referencia', 'Referencia:') !!}
				{!! Form::text('Referencia', $solicitud->Referencia, 
					[
						'class'       => 'form-control', 
						'placeholder' => 'Referencia'
						
				]) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('CostoObra','Costo Obra:')!!}
				{!! Form::number('CostoObra', $solicitud->CostoObra, 
					[
						'class'       => 'form-control', 
						'placeholder' => 'Costo Obra'
						
				]) !!}
			</div>

			<div class="form-group">
				<a id="buttonAjaxGet" class="headgrid__enlace btn btn-warning" href="{{ route('solicitud.index') }}">
					Cancelar AJX
				</a>

			@if( $solicitud->exists )
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