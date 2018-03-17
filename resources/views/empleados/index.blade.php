@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'empleados.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE EMPLEADOS</h4></b></center>


<a href="{{ $url = route('empleados.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Nuevos Empleados</a>




<p>
<div class="table-responsive">
<table class="table table-hover" id="tableempleado">
  <thead>
    <tr>
      <td>id</td>
      <!--<td>users_id</td>
      <td>tipodocumento_id</td>
      <td>NoDocumento</td>
      <td>Fecha_Nacimiento</td>-->
      <td>Nombres</td>
      <td>Apellidos</td>
    <!--  <td>nivel_educativo_id</td>
      <td>Profesion_id</td>
      <td>Direccion_casa</td>
      <td>Telefono_casa</td>
      <td>NoCelular</td>
      <td>email_empleado</td>
      <td>Genero</td>
      <td>estado_civil_id</td>
      <td>cargo_id</td>
      <td>sede_id</td>
      <td>departamento_id</td>
      <td>Tipo_empleado_id</td>
      <td>forma_pago_id</td>
      <td>banco_id</td>
      <td>estado_trabajador_id</td>
      <td>created_at</td>
      <td>updated_at</td>
      <td>_token</td>
      <td>_method</td>-->
      <td>Acciones</td>




    </tr>
  </thead>
  <tbody>

  @foreach($empleados as $row)
    <tr>

          <td>{{$row->id}}</td>
          <!--<td>{{$row->users_id}}</td>
          <td>{{$row->tipodocumento_id}}</td>
          <td>{{$row->NoDocumento}}</td>
          <td>{{$row->Fecha_Nacimiento}}</td>-->
          <td>{{$row->Nombres}}</td>
          <td>{{$row->Apellidos}}</td>
          <!--<td>{{$row->nivel_educativo_id}}</td>
          <td>{{$row->Profesion_id}}</td>
          <td>{{$row->Direccion_casa}}</td>
          <td>{{$row->Telefono_casa}}</td>
          <td>{{$row->NoCelular}}</td>
          <td>{{$row->email_empleado}}</td>
          <td>{{$row->Genero}}</td>
          <td>{{$row->estado_civil_id}}</td>
          <td>{{$row->cargo_id}}</td>
          <td>{{$row->sede_id}}</td>
          <td>{{$row->departamento_id}}</td>
          <td>{{$row->Tipo_empleado_id}}</td>
          <td>{{$row->forma_pago_id}}</td>
          <td>{{$row->banco_id}}</td>
          <td>{{$row->estado_trabajador_id}}</td>-->

          


        <td><a href="{{ $url = route('empleados.edit', $row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Edición</a></td>
        <td>@include('empleados.destroy')</td>





        </td></td>

    </tr>
  </tbody>

 @endforeach


</table>


</div>

{{ $empleados->links() }}
</div>

</div>


</div>



@endsection

