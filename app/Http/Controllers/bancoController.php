<?php

namespace App\Http\Controllers;

use App\banco;
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

class bancoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         Log::info('Ingreso a los bancos: '. Auth::user()->name);

        $index = DB::table('banco')->paginate();


        //return \Datatables::of(empleado::all())->make(true);

        return view('bancos.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('bancos.create');
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

       $store=banco::create($input); 
       Alert::success('Se guardo correctamente el banco!')->persistent("Close");

        return redirect()->route('bancos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function show(banco $banco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $edit= banco::findOrFail($id);
      
       return view('bancos.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $input = $request->all();
        //sires::update($input);
        //sires::find($id)->update($input);

        $updates=DB::table('banco')->where('id',"=",$id)->update($input); 
        Alert::success('Actualizo correctamente el banco!')->persistent("Close");

        return redirect()->route('bancos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\banco  $banco
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destruir=DB::table('banco')->where('id', '=', $id)->delete();
       Alert::success('Eliminó correctamente el banco!'.$id)->persistent("Close");
        return back();
    }
}
