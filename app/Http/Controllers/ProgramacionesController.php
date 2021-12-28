<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListasAleacionesModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_Worksheet_Drawing;
class ProgramacionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $materiales = DB::table('listas')
        ->where('listas.tipo','=',2)
        ->get();

        $proveedores = DB::table('listas')
        ->where('listas.tipo','=',1)
        ->get();

        $clientes = DB::table('listas_clientes')
        ->where('listas_clientes.estado','=','ACTIVO')
        ->get();

        $materiales_venta = DB::table('listas_aleaciones')
        ->where('listas_aleaciones.estado','=','ACTIVO')
        ->get();

        setlocale(LC_TIME, "spanish"); //
        $month = date('m');
        $year = date("Y");

        //return UsersModel::get();
        return view('compras.index',["materiales"=>$materiales,"proveedores"=>$proveedores,'month'=>$month,'year'=>$year,'clientes'=>$clientes,'materiales_venta'=>$materiales_venta]);
    }

    public function editar_programacion()
    {

        $materiales = DB::table('listas')
        ->where('listas.tipo','=',2)
        ->get();

        $proveedores = DB::table('listas')
        ->where('listas.tipo','=',1)
        ->get();

        $clientes = DB::table('listas_clientes')
        ->where('listas_clientes.estado','=','ACTIVO')
        ->get();

        $materiales_venta = DB::table('listas_aleaciones')
        ->where('listas_aleaciones.estado','=','ACTIVO')
        ->get();

        setlocale(LC_TIME, "spanish"); //
        $month = date('m');
        $year = date("Y");
        $date = date('Y-m-d');

        //return UsersModel::get();
        return view('compras.editar_programacion',["date"=>$date,"materiales"=>$materiales,"proveedores"=>$proveedores,'month'=>$month,'year'=>$year,'clientes'=>$clientes,'materiales_venta'=>$materiales_venta]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
