 <div 
      v-if="ordenTrabajo.trabajo_campo" 
      v-bind:id="'#collapseTrabajoCampo' + ordenTrabajo.trabajo_campo.orden_trabajo_id "
      class="unique-collapse collapse box" 
      v-bind:class="[currentPage == '#collapseTrabajoCampo' + ordenTrabajo.trabajo_campo.orden_trabajo_id  ? 'in': '']"
      aria-expanded="true">     
      <div class="container form-solicitud">  
          <div class="col-xs-12 col-offset-md-1 col-md-10 form-horizontal">
              <div class="form-group">
                  {!! Form::label('EquiposUtilizados', 'Equipos Utilizados:',[
                            'class'  => 'col-sm-3 control-label'
                        ]) !!}    
                  <div class="col-sm-9">
                    {!! Form::text('EquiposUtilizados', null, 
                        [
                          'id'          => 'EquiposUtilizados',
                          'class'       => 'form-control', 
                          'placeholder' => 'Equipos utilizados',
                          'v-model'     => 'ordenTrabajo.trabajo_campo.EquiposUtilizados',
                          'required'
                        ]) !!}
                  </div>
              </div>
              <div class="form-group">
                  {!! Form::label('Operadores', 'Operadores:',[
                            'class'  => 'col-sm-3 control-label'
                        ]) !!}    
                  <div class="col-sm-9">
                    {!! Form::text('Operadores', null, 
                        [
                          'id'          => 'OrdenTrabajo_Operadores',
                          'class'       => 'form-control', 
                          'placeholder' => 'Operadores',
                          'v-model'     => 'ordenTrabajo.trabajo_campo.Operadores',
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
                          'id'          => 'OrdenTrabajo_HoraEntrada',
                          'class'       => 'form-control', 
                          'placeholder' => 'HoraEntrada',
                          'v-model'     => 'ordenTrabajo.trabajo_campo.HoraEntrada',
                          'required'
                        ]) !!}
                  </div>
              </div>
              <div class="form-group">
                  {!! Form::label('Observacion', 'Observación:',[
                            'class'  => 'col-sm-3 control-label'
                        ]) !!}    
                  <div class="col-sm-9">
                    {!! Form::text('Observacion', null, 
                        [
                          'id'          => 'OrdenTrabajo_Observacion',
                          'class'       => 'form-control', 
                          'placeholder' => 'Observacion',
                          'v-model'     => 'ordenTrabajo.trabajo_campo.Observacion',
                          'required'
                        ]) !!}
                  </div>
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
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-forward" ></span> Crear Trabajo de Laboratorio</button>
            </div>
            <div class="col-xs-12 col-sm-6 accion-solicitud__right">
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-trash" ></span> Cancelar</button>
                <button class="btn btn-primary form-group" type="submit"><span class="fa fa-print"></span> Imprimir</button>
            </div>
            <div class="clearfix"></div>
      </div>  
  </div>