@extends('layouts.master-admin')

@section('title')

    <title>Solicitud Estudio</title>

@endsection

@section('css')
	<script src="{{ asset('/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"></script>	
<style>

.steps {
  /* margin: 40px; */
  margin: 10px 0px 2px 0px;
  padding: 0;
  overflow: hidden;
}
.steps a {
  color: white;
  text-decoration: none;
}
.steps em {
  display: block;
  font-size: 1.1em;
  font-weight: bold;
}
.steps li {
  float: left;
  margin-left: 0;
  width: 200px; /* 100 / number of steps */
  height: 70px; /* total height */
  list-style-type: none;
  padding: 5px 5px 5px 30px; /* padding around text, last should include arrow width */
  border-right: 3px solid white; /* width: gap between arrows, color: background of document */
  position: relative;
}
/* remove extra padding on the first object since it doesn't have an arrow to the left */
.steps li:first-child {
  padding-left: 5px;
}
/* white arrow to the left to "erase" background (starting from the 2nd object) */
.steps li:nth-child(n+2)::before {
  position: absolute;
  top:0;
  left:0;
  display: block;
  border-left: 25px solid white; /* width: arrow width, color: background of document */
  border-top: 40px solid transparent; /* width: half height */
  border-bottom: 40px solid transparent; /* width: half height */
  width: 0;
  height: 0;
  content: " ";
}
/* colored arrow to the right */
.steps li::after {
  z-index: 1; /* need to bring this above the next item */
  position: absolute;
  top: 0;
  right: -25px; /* arrow width (negated) */
  display: block;
  border-left: 25px solid #7c8437; /* width: arrow width */
  border-top: 40px solid transparent; /* width: half height */
  border-bottom: 40px solid transparent; /* width: half height */
  width:0;
  height:0;
  content: " ";
}

/* Setup colors (both the background and the arrow) */

/* Completed */
.steps li { background-color: #7C8437; }
.steps li::after { border-left-color: #7c8437; }

/* Current */
.steps li.current { background-color: #C36615; }
.steps li.current::after { border-left-color: #C36615; }

/* Following */
.steps li.current ~ li { background-color: #EBEBEB; }
.steps li.current ~ li::after { border-left-color: #EBEBEB; }

/* Hover for completed and current */
.steps li:hover {background-color: #696}
.steps li:hover::after {border-left-color: #696}


</style>
@endsection

@section('content')

    <!-- content-wrapper -->

    <div class="content-wrapper">

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">               
                <h1>
                    Solicitud Estudio
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">User Dashboard</li>
                </ol>
            </section>

            <!-- end content-header section -->

            <!-- content -->

            <section class="content">
                <h3>
                    Ordenes de trabajo
                    <small>Descripccion de la soliciutd</small>
                </h3>

                <!-- Your Page Content Here -->
        
                <div class="row panel-group"  id="accordion">
                    <div class="col-xs-12">             
                        <ul id="ulSteps" class="steps steps-4">
                            <li>
                                <a 
                                    href="#collapseOrdenTrabajo"  
                                    data-toggle="collapse" 
                                    data-parent="#accordion" 
                                    title="Paso 1">
                                    <em>Orden de Trabajo:</em>
                                    <span>Et nequ a quam turpis duisi</span>
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#collapseTrabajoCampo" 
                                    data-toggle="collapse" 
                                    data-parent="#accordion"
                                    title="Paso 2">
                                    <em>Trabajo de Campo:</em>
                                    <span>Et nequ a quam turpis duisi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#collapseTrabajoLaboratorio" data-toggle="collapse" title="Paso 3">
                                    <em>Trabajo de Laboratorio:</em>
                                    <span>Et nequ a quam turpis duisi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#collapseInformeFinal" data-toggle="collapse" title="Paso 4">
                                    <em>Informe Final:</em>
                                    <span>Et nequ a quam turpis duisi</span>
                                </a>
                            </li>
                            <div class="box-tools  pull-right">
                                <a href="#" title="Finalizada">
                                    <span 
                                        class="fa fa-flag" 
                                        style="font-size:  5em; color: green;">
                                    </span>
                                </a>      
                                <a href="#" title="Anulada">
                                    <span 
                                        class="fa fa-times-circle" 
                                        style="font-size:  5em; color: red;">
                                    </span>
                                </a>
                            </div>
                        </ul>

                        <div class="unique-collapse collapse box" id="collapseOrdenTrabajo" aria-expanded="true" style=""> 
                            <div class="row">  
                                <div class="col-xs-7">
                                    <div class="form-group">
                                        {!! Form::label('Descripccion', 'Descripcción:') !!}    
                                        {!! Form::text('Descripccion', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Descripccion',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Descripccion',
                                                'required'
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Fecha', 'Fecha:') !!}    
                                        {!! Form::text('Fecha', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Fecha',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Fecha',
                                                'required'
                                        ]) !!}
                                    </div>                                
                                    <div class="form-group">
                                        {!! Form::label('Responsable', 'Responsable:') !!}    
                                        {!! Form::text('Responsable', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Responsable',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Responsable',
                                                'required'
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Observacion', 'Observación:') !!}    
                                        {!! Form::text('Observacion', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Observacion',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Observacion',
                                                'required'
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Extras', 'Extras:') !!}    
                                        {!! Form::text('Extras', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Extras',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Extras',
                                                'required'
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="col-offset-1 col-xs-4">
                                    <img src="..." alt="..." class="img-thumbnail">
                                </div>
                            </div>
                            <div class="row">      
                                <div>
                                    <button class="btn btn-primary form-group" type="submit">Cancelar</button>
                                    <button class="btn btn-primary form-group" type="submit">Imprimir</button>
                                    <button class="btn btn-primary form-group" type="submit">Guardar</button><button class="btn btn-primary form-group" type="submit">Crear Trabajo de Campo</button>             
                                </div>
                            </div>  
                        </div>

                        <div class="unique-collapse collapse box" id="collapseTrabajoCampo" aria-expanded="true" style=""> 
                            <div class="row">  
                                <div class="col-xs-7">
                                    <div class="form-group">
                                        {!! Form::label('EquiposUtilizados', 'Equipos Utilizados:') !!}    
                                        {!! Form::text('EquiposUtilizados', null, 
                                            [
                                                'id'          => 'EquiposUtilizados',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Equipos utilizados',
                                                'required'
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Operadores', 'Operadores:') !!}    
                                        {!! Form::text('Operadores', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Operadores',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Operadores',
                                                'required'
                                        ]) !!}
                                    </div>                                
                                    <div class="form-group">
                                        {!! Form::label('HoraEntrada', 'HOraEntrada:') !!}    
                                        {!! Form::text('HoraEntrada', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_HoraEntrada',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'HoraEntrada',
                                                'required'
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Observacion', 'Observación:') !!}    
                                        {!! Form::text('Observacion', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Observacion',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Observacion',
                                                'required'
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">      
                                <div>
                                    <button class="btn btn-primary form-group" type="submit">Cancelar</button>
                                    <button class="btn btn-primary form-group" type="submit">Guardar</button><button class="btn btn-primary form-group" type="submit">Crear Trabajo de Laboratorio</button>             
                                </div>
                            </div>  
                        </div>

                        <div class="unique-collapse collapse box" id="collapseTrabajoLaboratorio" aria-expanded="true" style=""> 
                            <div class="row">  
                                <div class="col-xs-7">
                                    <div class="form-group">
                                        {!! Form::label('Descripccion', 'Descripcción:') !!}    
                                        {!! Form::text('Descripccion', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Operadores',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Descripccion',
                                                'required'
                                        ]) !!}
                                    </div>                                
                                    <div class="form-group">
                                        {!! Form::label('HoraEntrada', 'HoraEntrada:') !!}    
                                        {!! Form::text('HoraEntrada', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_HoraEntrada',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'HoraEntrada',
                                                'required'
                                        ]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('Observacion', 'Observación:') !!}    
                                        {!! Form::text('Observacion', null, 
                                            [
                                                'id'          => 'OrdenTrabajo_Observacion',
                                                'class'       => 'form-control', 
                                                'placeholder' => 'Observacion',
                                                'required'
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">      
                                <div>
                                    <button class="btn btn-primary form-group" type="submit">Cancelar</button>
                                    <button class="btn btn-primary form-group" type="submit">Guardar</button><button class="btn btn-primary form-group" type="submit">Finalizar</button>             
                                </div>
                            </div>  
                        </div>

                    </div>
                </div>

                <div class="row" style="margin: 10px 0px 0px 0px">
                    <div class="content-footer">
                        <button class="btn btn-primary form-group" type="submit">Finalizar Estudio / Generar Factura</button>
                    </div>
                </div>
            </section>

            <!-- end content section -->

        </div>

        <!-- end container -->

    </div>

    <!-- end content-wrapper -->

@endsection

@section('scripts')
    <script src ="{{ asset('/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src ="{{ asset('/js/vue.js') }}"></script>
    <script src ="{{ asset('/js/axios.js') }}"></script>
   <!--  <script src ="{{ asset('/js/Solicitud/features.js') }}"></script> -->
<!--     <script src ="{{ asset('/js/Solicitud/crud.js') }}"></script> -->
    <script src ="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).on('click','#ulSteps li a', function(e){
           // alert("entro");
            var $target = $('.unique-collapse');
                    if($target.hasClass('in')){
                        $target.removeClass('in');
                    }

         // $(this).addClass('selected').siblings().removeClass('selected');    
        });

    </script>

 @endsection