	
@extends('adminlte::layouts.app')

@section('htmlheader_title')
  bancos
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

{!! Form::open(['route' => 'bancos.store', 'method'=>'POST','enctype'=>'multipart/form-data','file'=>true]) !!}
	<legend>CREAR bancos</legend>

	 <!-- Form Element sizes -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de nuevos bancos</h3>
            </div>
            <div class="box-body">
              
              <input class="form-control input-lg" type="hidden" placeholder="id" name="id">
              <br>
              <label>Banco</label>
              

              <input type="text" name="Nombre_banco" class="form-control input-lg">
               <br>
               
              

              

           
              <button type="submit" class="btn bg-maroon btn-flat margin "><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar bancos</button>
              
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

