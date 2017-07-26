@extends('layouts.master-auth')

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
							<div class="clearfix"></div>

							<table class="table table-hover table-strip gridlist" >
				                <thead>
				                    <tr>
				                        <th>No. Documento</th>
				                        <th>Nombre</th>
				                        <th>Apellido</th>
				                        <th>Acciones</th>
				                    </tr>
				                </thead>
				                <tbody>
				                    @foreach ($clientes as $item)
				                        <tr>
				                            <td>
				                                {{ $item->NumeroDocumento }}
				                            </td>
				                            <td>
				                                {{ $item->Nombre }}
				                            </td>
				                             <td>
				                                {{ $item->Apellido }}
				                            </td>
				                            <td>
				                                
												{!! Form::open([
				                                    'route' => ['desactivarCliente', $item->id],
				                                    'method' => 'DELETE',
				                                    'class' => 'formaccion'			            
				                                ]) !!}

				                                  <a href="#" class="btn-show">
													<span class="icon-eye"></span>
												</a>
				                                {!! Form::close() !!}


											
				                                  <a href="{{ route('cliente.edit',$item->id) }}" class="btn-edit">
													<span class="icon-pencil"></span>
												</a>
				                                
												              <button class="btn btn-warning btn-detail open_modal" value="{{$item->id}}">Edit</button>



				                                {!! Form::open([
				                                    'route' => ['desactivarCliente', $item->id],
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


