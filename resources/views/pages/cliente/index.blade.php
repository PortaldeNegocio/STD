@extends('layouts.master-auth')

@section('css');
<script src="{{ asset('/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"></script>
<script src="{{ asset('/bootstrap/css/bootstrap.min.css') }}"></script>

@endsection;

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">
                <h1>
                    Clientes
                    <small>todos los registros de clientes</small>
                </h1>

                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">User Dashboard</li>
                </ol>

            </section>

            <!-- end content-header section -->

            <!-- content -->

            <section class="content">

                <!-- Your Page Content Here -->
				<div class="headgrid">
					<div class="col-md-10 headgrid__left">						
					</div>
					<div class="col-md-2 headgrid__right">
						<a id="buttonNuevo" class="headgrid__enlace btn-primary" href="{{ route('cliente.create') }}">
							<span class="icon-plus-square"></span> Nuevo
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<table id="example1" class="table table-bordered table-striped">
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
				                <td style="display: inline-block;">
									{!! Form::open([
				                                    'route' => ['destroyByAjax', $item->id],
				                                    'method' => 'DELETE',
				                                    'class' => 'formaccion'			            
					                                ]) !!}

				        	            <a href="#" class="btn-show" >
											<span class="icon-eye"></span>
										</a>
				                    {!! Form::close() !!}
											
				                    <a href="{{ route('cliente.edit',$item->id) }}" class="btn-edit">
										<span class="icon-pencil"></span>
									</a>
				                                
				                    {!! Form::open([
				                    	            'route' => ['destroyByAjax', $item->id],
				                                    'method' => 'DELETE',
				                                    'class' => 'formaccion'			            
				                                ]) !!}

				                        <a href="#" class="btn-delete">
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

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection

@section('scripts')
<script src="{{ asset('/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/js/Cliente/features.js') }}"></script>
<script src="{{ asset('/js/Cliente/crud.js') }}"></script>

<script src="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

 @endsection


