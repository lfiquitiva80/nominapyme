@extends('adminlte::layouts.app')

@section('htmlheader_title')
  Empleados
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

{!! Form::open(['route' => ['cargos.update', $edit->id],'method'=>'PATCH']) !!}
  <legend>Editar el empleado</legend>

   <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Editar los empleados</h3>
            </div>
            <div class="box-body">
              
              <input class="form-control input-lg" type="text" placeholder="id" name="id" readonly value="{{$edit->id}}">
              <br>
              <label>Cargo</label>
              <input type="text" name="cargo" class="form-control input-lg" value="{{$edit->cargo}}">
               <br>
              

           
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

