<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramacionVentasModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Imports\ImportVenta;
use Maatwebsite\Excel\Facades\Excel;
class ProgramacionVentasController extends Controller
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
        $file = $request->file('file_venta');
        Excel::import(new ImportVenta, $file);
        return Redirect::to('/nueva_programacion')->with('errors','Correcto');
    }

    public function nueva_venta(Request $request)
    {
        $user=Auth::user();
        $venta=new ProgramacionVentasModel;
        $venta->orden=$request->get('orden');
        $venta->year=$request->get('year');
        $venta->month=$request->get('month');
        $venta->cliente=$request->get('cliente');
        $venta->material=$request->get('material');
        $venta->lote=$request->get('lote');
        $venta->c_lotes=$request->get('c_lotes');
        $venta->p_list=$request->get('p_list');
        $venta->fecha_envio=$request->get('fecha_envio');
        $venta->n_sellos=$request->get('n_sellos');
        $venta->n_cajas=$request->get('n_cajas');
        $venta->estatus=0;
        $venta->bascula=0;
        $venta->observaciones=$request->get('observaciones');
        $venta->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario;
        $venta->estado="ACTIVO";
        $venta->save();
        if( $venta->save()){
            return response()->json(['venta'=>$venta]);
        }else{
            return false;
        }
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');


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
