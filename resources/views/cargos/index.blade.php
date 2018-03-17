@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'cargos.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE cargos</h4></b></center>


<a href="{{ $url = route('cargos.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Nuevos cargos</a>




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
      <td>Cargos</td>
      <!--<td>Apellidos</td>-->
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

  @foreach($index as $row)
    <tr>

          <td>{{$row->id}}</td>
         
          <td>{{$row->cargo}}</td>
         
          


        <td><a href="{{ $url = route('cargos.edit', $row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Edición</a></td>
        <td>@include('cargos.destroy')</td>





        </td></td>

    </tr>
  </tbody>

 @endforeach


</table>


</div>

{{ $index->links() }}
</div>

</div>


</div>



@endsection

