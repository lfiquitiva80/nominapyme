<?php

namespace App\Http\Controllers;

use App\tipo_contrato;
use Illuminate\Http\Request;
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

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Flash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Datatables;
use Alert;

class tipo_contratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo_contrato  $tipo_contrato
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_contrato $tipo_contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipo_contrato  $tipo_contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_contrato $tipo_contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo_contrato  $tipo_contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_contrato $tipo_contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo_contrato  $tipo_contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_contrato $tipo_contrato)
    {
        //
    }
}
