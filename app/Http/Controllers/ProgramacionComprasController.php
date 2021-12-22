<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramacionComprasModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ProgramacionComprasController extends Controller
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
        $user=Auth::user();
        $compra=new ProgramacionComprasModel;
        $compra->po=$request->get('po');
        $compra->year=$request->get('year');
        $compra->month=$request->get('month');
        $compra->supplier=$request->get('supplier');
        $compra->supplier=$request->get('material');
        $compra->supplier=$request->get('lot');
        $compra->supplier=$request->get('supplier_weight');
        $compra->supplier=$request->get('reception_date');
        $compra->supplier=$request->get('estatus');
        $compra->supplier=$request->get('bascula');
        $compra->supplier=$request->get('observaciones');
        $compra->supplier=$request->get('importacion');
        $compra->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario;
        $compra->estado="ACTIVO";
        $compra->save();
        if( $compra->save()){
            return response()->json(['compra'=>$compra]);
        }else{
            return false;
        }
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');


    }

    public function nueva_compra(Request $request)
    {
        $user=Auth::user();
        $compra=new ProgramacionComprasModel;
        $compra->po=$request->get('po');
        $compra->year=$request->get('year');
        $compra->month=$request->get('month');
        $compra->supplier=$request->get('supplier');
        $compra->material=$request->get('material');
        $compra->lot=$request->get('lot');
        $compra->supplier_weight=$request->get('supplier_weight');
        $compra->reception_date=$request->get('reception_date');
        $compra->estatus=8;
        $compra->bascula=0;
        $compra->observaciones=$request->get('observaciones');
        $compra->importacion=$request->get('importacion');
        $compra->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario;
        $compra->estado="ACTIVO";
        $compra->save();
        if( $compra->save()){
            return response()->json(['compra'=>$compra]);
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
