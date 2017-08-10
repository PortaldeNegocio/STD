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
       @include('pages.solicitud._table')
    </div>

    <!-- end content-wrapper  , ['solicitudEstudios' => $solicitudEstudios] -->

@endsection

@section('scripts')
    <script src ="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src ="{{ asset('/js/vue.js') }}"></script>
    <script src ="{{ asset('/js/axios.js') }}"></script>
    <script src ="{{ asset('/js/Solicitud/features.js') }}"></script>
<!--     <script src ="{{ asset('/js/Solicitud/crud.js') }}"></script> -->
    <script src ="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
 @endsection