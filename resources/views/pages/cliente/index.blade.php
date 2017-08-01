@extends('layouts.master-admin')

@section('title')

    <title>Cliente</title>

@endsection

@section('css')
	<script src="{{ asset('/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"></script>	
@endsection

@section('idpage')
id="page_clientes"
@endsection


@section('content')

    <!-- content-wrapper -->	
    <div class="content-wrapper">
       @include('pages.cliente._table', ['clientes' => $clientes])
    </div>

    <!-- end content-wrapper -->

@endsection

@section('scripts')
	<script src="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
{{-- 	<script src="{{ asset('/jquery/dist/jquery.min.js') }}"></script> --}}
	<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/js/Cliente/features.js') }}"></script>
	<script src="{{ asset('/js/Cliente/crud.js') }}"></script>
 @endsection


