 <div 
    v-if="ordenTrabajo.trabajo_campo.trabajos_laboratorio && ordenTrabajo.trabajo_campo.trabajos_laboratorio.length != 0" 
    v-bind:id="'#collapseTrabajoLaboratorio' +ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].id" 
    class="unique-collapse collapse box" 
    v-bind:class="[currentPage == '#collapseTrabajoLaboratorio' +ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].id ? 'in': '']"
    aria-expanded="true"> 
    <div class="container form-solicitud">  
        <div class="col-xs-12 col-offset-md-1 col-md-10 form-horizontal">
            <div class="form-group">
                {!! Form::label('Descripccion', 'Descripcción:',[
                            'class'  => 'col-sm-3 control-label'
                        ]) !!}    
                <div class="col-sm-9">
                    {!! Form::text('Descripccion', null, 
                        [
                          'id'          => 'trabajosLaboratorio_Descripcion',
                          'class'       => 'form-control', 
                          'placeholder' => 'Descripccion',
                          'v-model'     => 'ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].Descripccion',
                          'required'
                        ]) !!}
                </div>
            </div>                                
            <div class="form-group">
                {!! Form::label('HoraEntrada', 'HoraEntrada:',[
                            'class'  => 'col-sm-3 control-label'
                        ]) !!}    
                <div class="col-sm-9">
                    {!! Form::text('HoraEntrada', null, 
                        [
                            'id'          => 'TrabajoLaboratorio_HoraEntrada',
                            'class'       => 'form-control', 
                            'placeholder' => 'HoraEntrada',
                            'v-model'     => 'ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].HoraEntrada',
                            'required'
                        ]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('Observacion', 'Observación:',[
                            'class'  => 'col-sm-3 control-label'
                        ]) !!}    
                <div class="col-sm-9">{!! Form::text('Observacion', null, 
                        [
                            'id'          => 'TrabajoLaboratorio_ObservacionesTrabajo',
                            'class'       => 'form-control', 
                            'placeholder' => 'Observacion',
                            'v-model'     => 'ordenTrabajo.trabajo_campo.trabajos_laboratorio[0].ObservacionesTrabajo',
                            'required'
                        ]) !!}</div>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>        
    <div class="container">
        <div class="division"></div>
    </div>

    <div class="container accion-solicitud"> 
            <div class="col-xs-12 col-sm-6 accion-solicitud__left">                
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-save" ></span> Guardar</button>
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-forward" ></span> Finalizar</button>
            </div>
            <div class="col-xs-12 col-sm-6 accion-solicitud__right">
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-trash" ></span> Cancelar</button>
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-print"></span> Imprimir</button>
            </div>
            <div class="clearfix"></div>
      </div>
    
</div>