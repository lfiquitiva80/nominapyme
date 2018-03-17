<?php

namespace App\Http\Controllers;

use App\cargo;
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

class cargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         Log::info('Ingreso a los cargos: '. Auth::user()->name);

        $index = DB::table('cargo')->paginate();


        //return \Datatables::of(empleado::all())->make(true);

        return view('cargos.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cargos.create');
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

       $store=cargo::create($input); 
       Alert::success('Se guardo correctamente el cargo!')->persistent("Close");

        return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function show(cargo $cargo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit= cargo::findOrFail($id);
      
       return view('cargos.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('cargo')->where('id',"=",$id)->update($input); 
        Alert::success('Actualizo correctamente el cargo!')->persistent("Close");

        return redirect()->route('cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('cargo')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente el cargo!'.$id)->persistent("Close");
        return back();
    }
}
