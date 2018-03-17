<?php

namespace App\Http\Controllers;

use App\empleado;
use App\User;
use App\tipodocumento;
use App\nivel_educativo;
use App\profesion;
use App\estado_civil;
use App\departamento_area;
use App\tipo_empleado;
use App\forma_pago;
use App\banco;
use App\cargo;
use App\sede;
use App\estado_trabajador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;



class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Log::info('Ingreso al área del empleado: '. Auth::user()->name);

        $empleados = DB::table('empleado')->paginate();


        //return \Datatables::of(empleado::all())->make(true);

        return view('empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios= User::pluck('name', 'id');
        $tipodocumento = tipodocumento::pluck('Descripcion_Documento','id');
        $nivel_educativo = nivel_educativo::pluck('Nivel_Educativo','id');
        $profesion = profesion::pluck('Profesion','id');
        $estado_civil = estado_civil::pluck('estado_civil','id');
        $departamento_area = departamento_area::pluck('departamento_area','id');
        $tipo_empleado = tipo_empleado::pluck('tipo_empleado','id');
        $forma_pago = forma_pago::pluck('forma_pago','id');
        $banco = banco::pluck('Nombre_banco','id');
        $estado_trabajador = estado_trabajador::pluck('estado_trabajador','id');
        $cargo = cargo::pluck('cargo','id');
        $sede = sede::pluck('sede','id');
        //dd($tipodocumento);
        return view('empleados.create', compact('usuarios','tipodocumento','nivel_educativo','profesion','departamento_area','tipo_empleado','forma_pago','banco','estado_trabajador','estado_civil','cargo','sede'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $input = $request->all();
       //dd($input);

       $store=empleado::create($input); 
       Alert::success('Se guardo correctamente el empleado!')->persistent("Close");

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= empleado::findOrFail($id);
        //dd($edit);

        $usuarios= User::pluck('name', 'id');
        $tipodocumento = tipodocumento::pluck('Descripcion_Documento','id');
        $nivel_educativo = nivel_educativo::pluck('Nivel_Educativo','id');
        $profesion = profesion::pluck('Profesion','id');
        $estado_civil = estado_civil::pluck('estado_civil','id');
        $departamento_area = departamento_area::pluck('departamento_area','id');
        $tipo_empleado = tipo_empleado::pluck('tipo_empleado','id');
        $forma_pago = forma_pago::pluck('forma_pago','id');
        $banco = banco::pluck('Nombre_banco','id');
        $estado_trabajador = estado_trabajador::pluck('estado_trabajador','id');
        $cargo = cargo::pluck('cargo','id');
        $sede = sede::pluck('sede','id');

        return view('empleados.edit', compact('edit','usuarios','tipodocumento','nivel_educativo','profesion','departamento_area','tipo_empleado','forma_pago','banco','estado_trabajador','estado_civil','cargo','sede'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('empleado')->where('id',"=",$id)->update($input); 
        Alert::success('Actualizo correctamente el empleado!')->persistent("Close");

        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $destruir=DB::table('empleado')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente el empleado!'.$id)->persistent("Close");
        return back();
    }
}
