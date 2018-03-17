	
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  contratos
@endsection


@section('main-content')





  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  
  <a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a><p>

{!! Form::open(['route' => 'contratos.store', 'method'=>'POST','enctype'=>'multipart/form-data','file'=>true]) !!}
	<legend>CREAR contratos</legend>

	 <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de nuevos contratos</h3>
            </div>
            <div class="box-body">
              
              <input class="form-control input-lg" type="hidden" placeholder="id" name="id">
              <br>
              <div class="col-xs-6">
              <label>Cédula del empleado</label>
              {!! Form::select('empleado_id',$usuarios, null, ['class' => 'form-control input-lg']) !!}
              </div>
            <div class="col-xs-6">  
            <label>Salario</label>
             <input class="form-control input-lg" type="text" placeholder="Digite el salario" name="salario">
            </div>
           <div class="col-xs-6">   
            <label>Tipo de Contrato</label>
              {!! Form::select('tipo_contrato_id',$tipo_contrato, null, ['class' => 'form-control input-lg']) !!}
            </div>
             <div class="col-xs-6">   
            <label>Eps</label>
              {!! Form::select('eps_id',$eps, null, ['class' => 'form-control input-lg']) !!}
             </div>
              <div class="col-xs-6">       
            <label>Arl</label>
              {!! Form::select('arl_id',$arl, null, ['class' => 'form-control input-lg']) !!}
            </div>
             <div class="col-xs-6">          
             <label>Fecha de Ingreso</label>
             <input class="form-control input-lg" type="date" placeholder="Digite el salario" name="fecha_ingreso">
             </div>
              <div class="col-xs-6">   
             <label>Fecha de Retiro</label>
             <input class="form-control input-lg" type="date" placeholder="Digite el salario" name="fecha_ingreso">
             </div>
              <div class="col-xs-12">      
             <label>Observaciones</label>
             <textarea name="Observaciones" id="input" class="ckeditor" rows="3" required="required"></textarea>
              </div>

           
              <button type="submit" class="btn bg-maroon btn-flat margin "><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Contrato</button>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

	

{!! Form::close() !!}


  </div>
</div>
</div>
	</div>
	</div>


@endsection

