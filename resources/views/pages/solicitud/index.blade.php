@extends('layouts.master-admin')

@section('title')

    <title>Solicitud Estudio</title>

@endsection

@section('css')
	<script src="{{ asset('/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"></script>	
@endsection

@section('content')

    <!-- content-wrapper -->	
    <div class="content-wrapper">
       @include('pages.solicitud._table', ['solicitudes' => $solicitudes])
    </div>

    <!-- end content-wrapper -->

@endsection

@section('scripts')
	<script src="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/js/Cliente/features.js') }}"></script>
	<script src="{{ asset('/js/Cliente/crud.js') }}"></script>
 @endsection