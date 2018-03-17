<?php

namespace App\Http\Controllers;

use App\contrato;
use App\empleado;
use App\tipo_contrato;
use App\eps;
use App\arl;
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


class contratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         Log::info('Ingreso a los contratos el usuario: '. Auth::user()->name);

        $index = DB::table('contrato')->paginate();


        //return \Datatables::of(empleado::all())->make(true);

        return view('contratos.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $usuarios= empleado::pluck('NoDocumento', 'id');
       $tipo_contrato= tipo_contrato::pluck('Tipo_Contrato', 'id'); 
       $eps= eps::pluck('nombre_eps', 'id');
       $arl= arl::pluck('nombre_arl', 'id');
       return view('contratos.create', compact('usuarios','tipo_contrato','eps','arl'));
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

       $store=contrato::create($input); 
       Alert::success('Se guardo correctamente el contrato!')->persistent("Close");

        return redirect()->route('contratos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= contrato::findOrFail($id);

        $usuarios= empleado::pluck('NoDocumento', 'id');
       $tipo_contrato= tipo_contrato::pluck('Tipo_Contrato', 'id'); 
       $eps= eps::pluck('nombre_eps', 'id');
       $arl= arl::pluck('nombre_arl', 'id');
       return view('contratos.edit', compact('usuarios','edit','tipo_contrato','eps','arl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
         $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('contrato')->where('id',"=",$id)->update($input); 
        Alert::success('Actualizo correctamente el contrato!')->persistent("Close");

        return redirect()->route('contratos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('contrato')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente el contrato!'.$id)->persistent("Close");
        return back();
    }
}
