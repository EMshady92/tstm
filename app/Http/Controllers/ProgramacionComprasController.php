<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramacionComprasModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportCompra;
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
        $file = $request->file('file_compra');
        Excel::import(new ImportCompra, $file);
        return Redirect::to('/nueva_programacion')->with('errors','Necesitas pertenecer a una sala para poder ver los expedientes');



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
        $compra->estatus=0;
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


    public function guardar_nueva_compra_excel(Request $request)
    {
        $user=Auth::user();
        print_r($user);
        $path = $request->file_compra->getRealPath();
        $data = Excel::load($path)->get();
        foreach ($data as $key => $value) {
            $compra=new ProgramacionComprasModel;
            $compra->po=$request->get('po');
            $compra->year=$request->get('year');
            $compra->month=$request->get('month');
            $compra->supplier=$request->get('supplier');
            $compra->material=$request->get('material');
            $compra->lot=$request->get('lot');
            $compra->supplier_weight=$request->get('supplier_weight');
            $compra->reception_date=$request->get('reception_date');
            $compra->estatus=0;
            $compra->bascula=0;
            $compra->observaciones=$request->get('observaciones');
            $compra->importacion=$request->get('importacion');
            $compra->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario;
            $compra->estado="ACTIVO";
            $compra->save();
        }


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

    public function editar_compra(Request $request)
    {
        $id = $request->get('id');
        $user=Auth::user();
        $compra=ProgramacionComprasModel::findOrFail($id);
        $compra->po=$request->get('po');
        $compra->year=$request->get('year');
        $compra->month=$request->get('month');
        $compra->supplier=$request->get('supplier');
        $compra->material=$request->get('material');
        $compra->lot=$request->get('lot');
        $compra->supplier_weight=$request->get('supplier_weight');
        $compra->reception_date=$request->get('reception_date');
        $compra->estatus=0;
        $compra->bascula=0;
        $compra->observaciones=$request->get('observaciones');
        $compra->importacion=$request->get('importacion');
        $compra->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario;
        $compra->estado="ACTIVO";
        $compra->update();
        if( $compra->update()){
            return response()->json(['compra'=>$compra]);
        }else{
            return false;
        }
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');


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

    public function traer_compras_dates($fecha,$filtro)
    {

        if ($filtro == 1){
            $compras = DB::table('programacion_compras')
            ->where('programacion_compras.estado','=','ACTIVO')
            ->whereDate('programacion_compras.reception_date','=',$fecha)
            ->get();
        }else if($filtro == 2){
            $compras = DB::table('programacion_compras')
            ->where('programacion_compras.estado','=','ACTIVO')
            ->whereDate('programacion_compras.created_at','=',$fecha)
            ->get();
        }

        return response()->json(['compras'=>$compras]);
    }

    public function traer_datos_edit_compra($cadena)
    {
        $id_compra = explode("_", $cadena);
        $id = $id_compra[0];

        $compra = DB::table('programacion_compras')
            ->where('programacion_compras.id','=',$id)
            ->first();
        return response()->json(['compra'=>$compra]);
    }
}
