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

{!! Form::open(['route' => ['contratos.update', $edit->id],'method'=>'PATCH']) !!}
  <legend>Editar el empleado</legend>

   <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Editar los contratos</h3>
            </div>
            <div class="box-body">
            <div class="col-xs-6">
            <label for="">id</label>  
            <input class="form-control input-lg" type="text" placeholder="id" name="id" readonly value="{{$edit->id}}">
            </div>
              <div class="col-xs-6">

              <label>Cédula del empleado</label>
              {!! Form::select('empleado_id',$usuarios, $edit->empleado_id, ['class' => 'form-control input-lg']) !!}
              </div>
            <div class="col-xs-6">  
            <label>Salario</label>
             <input class="form-control input-lg" type="text" placeholder="Digite el salario" name="salario" value="{{$edit->salario}}">
            </div>
           <div class="col-xs-6">   
            <label>Tipo de Contrato</label>
              {!! Form::select('tipo_contrato_id',$tipo_contrato, $edit->tipo_contrato_id, ['class' => 'form-control input-lg']) !!}
            </div>
             <div class="col-xs-6">   
            <label>Eps</label>
              {!! Form::select('eps_id',$eps, $edit->eps_id, ['class' => 'form-control input-lg']) !!}
             </div>
              <div class="col-xs-6">       
            <label>Arl</label>
              {!! Form::select('arl_id',$arl, $edit->arl_id, ['class' => 'form-control input-lg']) !!}
            </div>
             <div class="col-xs-6">          
             <label>Fecha de Ingreso</label>
             <input class="form-control input-lg" type="text" placeholder="Digite el salario" name="fecha_ingreso" value="{{$edit->fecha_ingreso}}">
             </div>
              <div class="col-xs-6">   
             <label>Fecha de Retiro</label>
             <input class="form-control input-lg" type="text" placeholder="Digite el salario" name="fecha_ingreso" value="{{$edit->fecha_ingreso}}">
             </div>
              <div class="col-xs-12">      
             <label>Observaciones</label>
             <textarea name="Observaciones" id="input" class="ckeditor" rows="3" required="required">{{$edit->Observaciones}}</textarea>
              </div>

           
              <button type="submit" class="btn bg-maroon btn-flat margin "><i class="fa fa-floppy-o" aria-hidden="true"></i> Actualizar información</button>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
  

{!! Form::close() !!}


          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

