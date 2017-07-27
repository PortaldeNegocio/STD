@extends('layouts.master-auth')

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">
                
                <h1>
                    Modificar Clientes
                    <small>formulario para modificar un cliente</small>
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
		
	  	    	<div class="col-xs-offset-0 col-xs-9">  			
    		      	@include('pages.cliente._form', ['cliente' => $cliente])
    		    </div>

            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection

@section('scripts')
<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/js/Cliente/features.js') }}"></script>

 @endsection


