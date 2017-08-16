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

        <!-- container -->

        <div class="container">

            <!-- content-header has breadcrumbs -->

            <section class="content-header">               
                <div class="content-header__left sinpadding col-md-6">
                  <h1>
                      Solicitud Estudio
                      {{-- <small>@{{solicitudEstudio.Descripcion}}</small> --}}
                  </h1>
                  <div class="content-header__icono">
                    <a  href="#" class="content-header__icono__item" data-toggle="tooltip" data-placement="top" title="Editar Solicitud de Estudio">
                      <span class="fa fa-pencil"></span>
                    </a>
                    <a href="#" class="content-header__icono__item" data-toggle="tooltip" data-placement="top" title="Eliminar Solicitud de Estudio">
                      <span class="fa fa-times"></span>
                    </a>
                  </div>
                </div>
               <div class="content-header__right col-md-6">
                  <ol class="breadcrumb">
                     <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                     <li class="active">User Dashboard</li>
                 </ol>
               </div>
            </section>
            <div class="clearfix"></div>

            <!-- end content-header section -->

            <section class="content__title">
                <h2>Nombre del Cliente / Nombre de la Obra</h2>
            </section>
            
            <div class="container">
                
                    <div class="division col-md-12"></div>  
                
            </div>
                     

            <!-- content -->

            <section class="content">
               <div class="content__head">
                  <h3>
                     Ordenes de trabajo                    
                 </h3>
                 <button
                     id="btnNewOrdenTrabajo" 
                     class="headgrid__enlace btn leer-mas"
                     v-bind:class="[haveNewOrdenTrabajo ? 'disabled': '']"  
                     style="margin-bottom: 7px;"                      
                     v-on:click.prevent="newOrdenTrabajo()">
                     <span class="icon-plus-square"></span> Nuevo
                 </button>
               </div>
            
                <!-- Your Page Content Here -->
                 <div id="pageContent">
                   <div class="row panel-group" v-for="ordenTrabajo in solicitudEstudio.ordenes_trabajo">
                       <div class="col-xs-12">             
                            <ul id="ulSteps" class="steps steps-4">
                                <li class="orden-trabajo" v-if="ordenTrabajo" 
                                    v-bind:class="[!ordenTrabajo.trabajo_campo ? 'current': '']">
                                   <a 
                                        v-bind:href="'#collapseOrdenTrabajo' + ordenTrabajo.id"
                                        v-on:click.prevent="selectTab('#collapseOrdenTrabajo' + ordenTrabajo.id)"
                                        data-toggle="collapse" 
                                        title="Orden de Trabajo">
                                       <em>Orden de Trabajo:</em>
                                       <span>@{{ordenTrabajo.Descripcion}}</span>
                                   </a>
                                </li>
                                <li class="orden-trabajo" v-else>
                                   <a title="Orden de Trabajo">
                                       <em>Orden de Trabajo:</em>
                                   </a>
                                </li>

                                <li class="trabajo-campo" v-if="ordenTrabajo.trabajo_campo" 
                                    v-bind:class="[ordenTrabajo.trabajo_campo.trabajos_laboratorio && ordenTrabajo.trabajo_campo.trabajos_laboratorio.length == 0 ? 'current': '']">
                                   <a
                                       v-bind:href="'#collapseTrabajoCampo'+ordenTrabajo.trabajo_campo.orden_trabajo_id" 
                                        v-on:click.prevent="selectTab('#collapseTrabajoCampo'+ordenTrabajo.trabajo_campo.orden_trabajo_id)"
                                       data-toggle="collapse" 
                                       title="Trabajo de Campo">
                                       <em>Trabajo de Campo:</em>
                                       <span>@{{ordenTrabajo.trabajo_campo.Observacion}}</span>
                                   </a>
                                </li>
                                <li class="trabajo-campo" v-else>
                                    <a
                                       title="Trabajo de Campo">
                                       <em>Trabajo de Campo:</em>
                                   </a>
                                </li>
                   
                                <li class="trabajos-laboratorio" v-if="ordenTrabajo.trabajo_campo.trabajos_laboratorio && ordenTrabajo.trabajo_campo.trabajos_laboratorio.length != 0" 
                                    v-bind:class="[!ordenTrabajo.InformeFinal ? 'current': '']">
                                   <a 
                                       v-bind:href="'#collapseTrabajoLaboratorio' +ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].id" 
                                        v-on:click.prevent="selectTab('#collapseTrabajoLaboratorio' +ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].id)"
                                       data-toggle="collapse" 
                                       title="Trabajo de Laboratorio">
                                       <em>Trabajo de Laboratorio:</em>
                                       <span>@{{ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].DescripcionMuestra}}</span>
                                   </a>
                                </li>
                                <li class="trabajos-laboratorio" v-else>
                                   <a 
                                       title="Trabajo de Laboratorio">
                                       <em>Trabajo de Laboratorio:</em>
                                   </a>
                                </li>  
                                     
                                <li class="trabajos-finalizado" v-bind:class="[ordenTrabajo.Estado == 'Finalizado' ? 'current' :'']">
                                    <a 
                                        href="#collapseInformeFinal"
                                        data-toggle="collapse" 
                                        title="Informe Final">
                                        <em>Informe Final:</em>
                                    </a>
                                </li>

                                <div class="box-tools">
                                    <a href="#" class="ultimo_icono" title="Finalizada"  >
                                        <span 
                                           class="fa fa-flag" 
                                           style="font-size: 60px; color: green;">
                                        </span>
                                    </a>      
                                    <a href="#" class="ultimo_icono oculto" title="Anulada"  >
                                        <span 
                                           class="fa fa-times-circle" 
                                           style="font-size:  60px; color: #C9302C;">
                                        </span>
                                    </a>
                                </div>
                            </ul>
                            
                            {{-- se llama el formulario de orden trabajo --}}                            
                            @include('pages.ordenTrabajo._form')
                            
                            {{-- se llama el formulario de trabajo de Campo --}}                            
                            @include('pages.trabajoCampo._form')    

                            {{-- se llama el formulario de trabajo de Campo --}}                            
                            @include('pages.trabajoLaboratorio._form')     
               
                       </div>
                   </div>  

               <!--     <pre> @{{ $data }}  </pre>        -->
               </div>
                
                            
                    <div class="division"></div>                 
                
                
                    <div class="solicitud-footer">
                        <button class="btn leer-mas form-group" type="submit">
                        <span class="fa fa-check-square-o"></span> Finalizar Estudio / Generar Factura</button>
                       
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
     <script src ="{{ asset('/js/Solicitud/core.js') }}"></script> 
<!--     <script src ="{{ asset('/js/Solicitud/crud.js') }}"></script> -->
    <script src ="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script>
       /* $(document).on('click','#ulSteps li a', function(e){
          
            var $target = $('.unique-collapse');

                    if($target.hasClass('in')){
                         alert("yes");
                        $target.removeClass('in');
                    }
                    else
                    {
                        $(this).addClass('in')

                        alert("no");
                        

                    }

         // $(this).addClass('selected').siblings().removeClass('selected');    
        });*/

    </script>

 @endsection