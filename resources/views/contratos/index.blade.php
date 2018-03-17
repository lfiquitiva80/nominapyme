@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


  <div class="panel-body">

<div class="container">
{!! Form::open(['route' => 'contratos.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search" name="namefuncionario" id="namefuncionario">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
{!! Form::close() !!}
<div class="panel panel-default">
<h4><b><center>REGISTROS DE contratos</h4></b></center>


<a href="{{ $url = route('contratos.create') }}" class="btn btn-primary"><i class="fa fa-users" aria-hidden="true"></i> Registar Nuevos contratos</a>




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
      <td>empleado_id</td>
      <td>salario</td>
   
      <td>Acciones</td>




    </tr>
  </thead>
  <tbody>

  @foreach($index as $row)
    <tr>

          <td>{{$row->id}}</td>
          
          <td>{{$row->empleado_id}}</td>
          <td>{{$row->salario}}</td>
        
          


        <td><a href="{{ $url = route('contratos.edit', $row->id) }}" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i> Edición</a></td>
        <td>@include('contratos.destroy')</td>





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

