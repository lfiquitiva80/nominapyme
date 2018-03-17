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

{!! Form::open(['route' => ['empleados.update', $edit->id],'method'=>'PATCH']) !!}
  <legend>Editar el empleado</legend>

   <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Editar los empleados</h3>
            </div>
            <div class="box-body">
              <label for="">id</label>
              <input class="form-control input-lg" type="text" placeholder="id" name="id" value="{{$edit->id}}" readonly>
              <br>
              <label>Usuario que registra al empleado</label>
              {!! Form::select('users_id',$usuarios, null, ['class' => 'form-control input-lg']) !!}
               <br>
               <label>Tipo de Documento</label>
               {!! Form::select('tipodocumento_id',$tipodocumento, $edit->tipodocumento_id, ['class' => 'form-control input-lg']) !!}
                <br>
               
               <label>Número de Documento</label>
              <input class="form-control input-lg" type="text" placeholder="Digite el NoDocumento" name="NoDocumento" value="{{$edit->NoDocumento}}">
              <br>
               <label>Fecha de Nacimiento</label>
              <input class="form-control input-lg" type="text" placeholder="Digite el NoDocumento" name="Fecha_Nacimiento" value="{{$edit->Fecha_Nacimiento}}">
              <br>
              <label>Nombres</label>
              <input class="form-control input-lg" type="text" placeholder="Digite sus Nombres" name="Nombres" value="{{$edit->Nombres}}">
              <br>
              <label>Apellidos</label>
              <input class="form-control input-lg" type="text" placeholder="Digite sus Apellidos" name="Apellidos" value="{{$edit->Apellidos}}">
              <br>
              <label>Nivel Educativo</label>
               {!! Form::select('nivel_educativo_id',$nivel_educativo, $edit->nivel_educativo_id, ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Profesion</label>
               {!! Form::select('Profesion_id',$profesion, $edit->Profesion_id, ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Dirección Casa</label>
              <input class="form-control input-lg" type="text" placeholder="Digite su dirección de casa" name="Direccion_casa" value="{{$edit->Direccion_casa}}">
              <br>
               <label>Teléfono de Casa</label>
              <input class="form-control input-lg" type="text" placeholder="Digite su Teléfono de Casa" name="Telefono_casa" value="{{$edit->Telefono_casa}}">
              <br>
              <label>Número de Celular</label>
              <input class="form-control input-lg" type="text" placeholder="Digite su número de celular" name="NoCelular" value="{{$edit->NoCelular}}">
              <br>
              <label>E-mail</label>
              <input class="form-control input-lg" type="email" placeholder="Digite su e-mail" name="email_empleado" value="{{$edit->email_empleado}}">
              <br>
              <label>Género</label>
               {!! Form::select('Genero',['1' => 'Masculino', '0' => 'Femenino'], $edit->Genero, ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Estado Civil</label>
               {!! Form::select('estado_civil_id',$estado_civil, $edit->estado_civil_id, ['class' => 'form-control input-lg']) !!}
                <br>
               <label>Cargo</label>
               {!! Form::select('cargo_id',$cargo, $edit->cargo_id, ['class' => 'form-control input-lg']) !!}
                <br>
                 <label>Sede</label>
               {!! Form::select('sede_id',$sede, $edit->sede_id, ['class' => 'form-control input-lg']) !!}
                <br>
                 <label>Departamento o Area</label>
               {!! Form::select('departamento_id',$departamento_area, $edit->departamento_id, ['class' => 'form-control input-lg']) !!}
                <br>
                <label>Departamento o Area</label>
               {!! Form::select('Tipo_empleado_id',$tipo_empleado, $edit->Tipo_empleado_id, ['class' => 'form-control input-lg']) !!}
                <br>
                <label>Forma de Pago</label>
               {!! Form::select('forma_pago_id',$forma_pago, $edit->forma_pago_id, ['class' => 'form-control input-lg']) !!}
                <br> 
              <label>Banco</label>
               {!! Form::select('banco_id',$banco, $edit->banco_id, ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Estado Trabajador</label>
               {!! Form::select('estado_trabajador_id',$estado_trabajador, $edit->estado_trabajador_id, ['class' => 'form-control input-lg']) !!}
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

