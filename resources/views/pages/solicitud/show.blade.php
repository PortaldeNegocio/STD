@extends('layouts.master-auth')

@section('css')
<link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.0.2/dist/vue-multiselect.min.css">
      
@endsection

@section('content')

    <!-- content-wrapper -->
    <div class="content-wrapper">
        @include('pages.solicitud._form', ['solicitud' => $solicitud])
    </div>
    <!-- end content-wrapper -->

@endsection

@section('scripts')

<script src="https://unpkg.com/vue-multiselect@2.0.0-beta.15/dist/vue-multiselect.min.js"></script>


<script src="https://unpkg.com/vue-multiselect@2.0.2/dist/vue-multiselect.min.js"></script>




<script scr="https://unpkg.com/vue@latest"></script>
<!-- use the latest release -->
<script src="https://unpkg.com/vue-select@latest"></script

    <script src ="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.0/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
    <script src ="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
 <!--    <script src ="{{ asset('/js/Solicitud/features.js') }}"></script> -->
    <script src ="{{ asset('/js/Solicitud/crud.js') }}"></script>
 @endsection