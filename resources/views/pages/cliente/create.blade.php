@extends('layouts.master-auth')

@section('content')

    <!-- content-wrapper -->
    <div class="content-wrapper">
        @include('pages.cliente._form', ['cliente' => $cliente])
    </div>
    <!-- end content-wrapper -->

@endsection

@section('scripts')
    <script src="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/Cliente/features.js') }}"></script>
    <script src="{{ asset('/js/Cliente/crud.js') }}"></script>
 @endsection


