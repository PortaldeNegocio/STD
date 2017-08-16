  <div 
      v-bind:id="'#collapseOrdenTrabajo' + ordenTrabajo.id "
      class="unique-collapse collapse box" 
      v-bind:class="[currentPage == '#collapseOrdenTrabajo' + ordenTrabajo.id  ? 'in': '']"
      aria-expanded="true"> 
        <div class="container form-solicitud">  
            <div class="col-xs-12 col-md-8 form-horizontal">
                <div class="form-group">
                    {!! Form::label('Descripccion', 'Descripción:',[
                            'class'  => 'col-sm-2 control-label'
                        ]) 
                    !!}    
                    <div class="col-sm-10">
                        {!! Form::text('Descripccion', null, 
                            [
                                'id'          => 'OrdenTrabajo_Descripccion',
                                'class'       => 'form-control', 
                                'placeholder' => 'Descripccion',
                                'v-model'     => 'ordenTrabajo.Descripcion',
                                'required'
                        ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('Fecha', 'Fecha:', [
                            'class'  => 'col-sm-2 control-label'
                        ]) 
                    !!}    
                    <div class="col-sm-10">
                        {!! Form::text('Fecha', null, 
                           [
                               'id'          => 'OrdenTrabajo_Fecha',
                               'class'       => 'form-control', 
                               'placeholder' => 'Fecha',
                               'v-model'     => 'ordenTrabajo.Fecha',
                               'required'
                           ]) !!}
                    </div>
                </div>                                
                <div class="form-group">
                    {!! Form::label('Autorizado', 'Autorizado:', [
                            'class'  => 'col-sm-2 control-label'
                        ]) !!}    
                    <div class="col-sm-10">
                        {!! Form::text('Autorizado', null, 
                            [
                                'id'          => 'OrdenTrabajo_Autorizado',
                                'class'       => 'form-control', 
                                'placeholder' => 'Autorizado',
                                'v-model'     => 'ordenTrabajo.Autorizado',
                                'required'
                        ]) !!}
                    </div>
                </div>                
                <div class="form-group">
                    {!! Form::label('Responsable', 'Responsable:', [
                            'class'  => 'col-sm-2 control-label'
                        ]) !!}    
                    <div class="col-sm-10">{!! Form::text('Responsable', null, 
                            [
                                'id'          => 'OrdenTrabajo_Responsable',
                                'class'       => 'form-control', 
                                'placeholder' => 'Responsable',
                                'v-model'     => 'ordenTrabajo.Responsable',
                                'required'
                            ]) !!}</div>
                </div>
                <div class="form-group">
                    {!! Form::label('Observacion', 'Observación:', [
                            'class'  => 'col-sm-2 control-label'
                        ]) !!}    
                    <div class="col-sm-10">
                        {!! Form::text('Observacion', null, 
                            [
                                'id'          => 'OrdenTrabajo_Observacion',
                                'class'       => 'form-control', 
                                'placeholder' => 'Observacion',
                                'v-model'     => 'ordenTrabajo.Observacion',
                                'required'
                            ]) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('Extras', 'Extras:', [
                            'class'  => 'col-sm-2 control-label'
                        ]) !!}    
                    <div class="col-sm-10">
                        {!! Form::text('Extras', null, 
                            [
                                'id'          => 'OrdenTrabajo_Extras',
                                'class'       => 'form-control', 
                                'placeholder' => 'Extras',
                                'v-model'     => 'ordenTrabajo.Extras',
                                'required'
                          ]) !!}
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="contenedor-up">
                    <img src="/imgs/game.jpeg" alt="" class="img-responsive">
                    <a href="#" class="contenedor-up__enlace">
                        <span class="fa fa-upload"></span>
                    </a>
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
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-forward" ></span> Crear Trabajo de Campo</button>             
            </div>
            <div class="col-xs-12 col-sm-6 accion-solicitud__right">
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-trash" ></span> Cancelar</button>
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-print"></span> Imprimir</button>
            </div>
            <div class="clearfix"></div>

        </div>  
    </div>