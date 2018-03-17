	
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

{!! Form::open(['route' => 'empleados.store', 'method'=>'POST','enctype'=>'multipart/form-data','file'=>true]) !!}
	<legend>CREAR empleados</legend>

	 <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de nuevos empleados</h3>
            </div>
            <div class="box-body">
              
              <input class="form-control input-lg" type="hidden" placeholder="id" name="id">
              <br>
              <label>Usuario que registra al empleado</label>
              {!! Form::select('users_id',$usuarios, Auth::User()->id, ['class' => 'form-control input-lg']) !!}
               <br>
               <label>Tipo de Documento</label>
               {!! Form::select('tipodocumento_id',$tipodocumento, null, ['class' => 'form-control input-lg']) !!}
                <br>
               
               
              <input class="form-control input-lg" type="text" placeholder="Digite el NoDocumento" name="NoDocumento">
              <br>
               <label>Fecha de Nacimiento</label>
              <input class="form-control input-lg" type="date" placeholder="Digite el NoDocumento" name="Fecha_Nacimiento">
              <br>
              <label>Nombres</label>
              <input class="form-control input-lg" type="text" placeholder="Digite sus Nombres" name="Nombres">
              <br>
              <label>Apellidos</label>
              <input class="form-control input-lg" type="text" placeholder="Digite sus Apellidos" name="Apellidos">
              <br>
              <label>Nivel Educativo</label>
               {!! Form::select('nivel_educativo_id',$nivel_educativo, null, ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Profesion</label>
               {!! Form::select('Profesion_id',$profesion, null, ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Dirección Casa</label>
              <input class="form-control input-lg" type="text" placeholder="Digite su dirección de casa" name="Direccion_casa">
              <br>
               <label>Teléfono de Casa</label>
              <input class="form-control input-lg" type="text" placeholder="Digite su Teléfono de Casa" name="Telefono_casa">
              <br>
              <label>Número de Celular</label>
              <input class="form-control input-lg" type="text" placeholder="Digite su número de celular" name="NoCelular">
              <br>
              <label>E-mail</label>
              <input class="form-control input-lg" type="email" placeholder="Digite su e-mail" name="email_empleado">
              <br>
              <label>Género</label>
               {!! Form::select('Genero',['1' => 'Masculino', '0' => 'Femenino'], '1', ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Estado Civil</label>
               {!! Form::select('estado_civil_id',$estado_civil, null, ['class' => 'form-control input-lg']) !!}
                <br>
               <label>Cargo</label>
               {!! Form::select('cargo_id',$cargo, null, ['class' => 'form-control input-lg']) !!}
                <br>
                 <label>Sede</label>
               {!! Form::select('sede_id',$sede, null, ['class' => 'form-control input-lg']) !!}
                <br>
                 <label>Departamento o Area</label>
               {!! Form::select('departamento_id',$departamento_area, null, ['class' => 'form-control input-lg']) !!}
                <br>
                <label>Departamento o Area</label>
               {!! Form::select('Tipo_empleado_id',$tipo_empleado, null, ['class' => 'form-control input-lg']) !!}
                <br>
                <label>Forma de Pago</label>
               {!! Form::select('forma_pago_id',$forma_pago, null, ['class' => 'form-control input-lg']) !!}
                <br> 
              <label>Banco</label>
               {!! Form::select('banco_id',$banco, null, ['class' => 'form-control input-lg']) !!}
                <br>
              <label>Estado Trabajador</label>
               {!! Form::select('estado_trabajador_id',$estado_trabajador, null, ['class' => 'form-control input-lg']) !!}
                <br>          
              

              

           
              <button type="submit" class="btn bg-maroon btn-flat margin "><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar Empleado</button>
              
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

