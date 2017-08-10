@extends('layouts.master-auth')

@section('content')

    <!-- content-wrapper -->
    <div class="content-wrapper">
        @include('pages.solicitud._form', ['solicitud' => $solicitud])
    </div>
    <!-- end content-wrapper -->

@endsection

@section('scripts')
    <script src ="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.0/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
    <script src ="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src ="{{ asset('/js/Solicitud/features.js') }}"></script>
    <script src ="{{ asset('/js/Solicitud/crud.js') }}"></script>
 @endsection