<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListasCalidadModel;
use App\Models\ClientesModel;
use App\Models\ListasAleacionesModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ListasCalidadController extends Controller
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

        $listas = DB::table('listas_calidad')->get();

        return view('listas_calidad.index', ['listas' => $listas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listas = DB::table('listas_calidad')->get();
        $listas_cliente = DB::table('listas_clientes')
        ->where('listas_clientes.estado','=','ACTIVO')
        ->get();
        $listas_aleaciones = DB::table('listas_aleaciones')
        ->where('listas_aleaciones.estado','=','ACTIVO')
        ->get();


        return view('listas_calidad.create', ['listas' => $listas,'listas_cliente'=>$listas_cliente,'listas_aleaciones'=>$listas_aleaciones]);
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

    public function guardar_nuevo_cliente($nombre){


            $user=Auth::user();
            $cliente=new ClientesModel;
            $cliente->nombre=$nombre;
            $cliente->estado="ACTIVO";
            $cliente->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario ." Email:" .$user->email;
            $cliente->save();
           // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');

           return response()->json(['cliente'=>$cliente]);



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

    public function editar_cliente($nombre,$id){


        $user=Auth::user();
        $cliente=ClientesModel::findOrFail($id);
        $cliente->nombre=$nombre;
        $cliente->estado="ACTIVO";
        $cliente->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario ." Email:" .$user->email;
        $cliente->update();
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');

       if ($cliente->update()){
           $clientes = DB::table('listas_clientes')
           ->where('listas_clientes.estado','=','ACTIVO')
           ->orderBy('created_at','DESC')->get();
           return response()->json(['cliente'=>$cliente,'clientes'=>$clientes]);
       }else{
           return false;
       }



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

    public function guardar_compuestos(Request $request,$id_aleacion)
    {

        $tipo =DB::table('listas_aleaciones')
        ->where('listas_aleaciones.id','=',$id_aleacion)
        ->where('listas_aleaciones.estado','=','ACTIVO')
        ->first()->tipo;

        $data = $request->get('compuestos');
        $user=Auth::user();
        foreach ($data as $_aux) {
            $elements = explode(",", $_aux);
            for ($x = 0; $x < count($elements); $x++) {
                $lista = new ListasCalidadModel;
                $lista->nombre_composicion = $elements[$x];
                $lista->tipo =  $tipo;
                $lista->rango_1 = 0;
                $lista->rango_2 = 0;
                $lista->captura = $user->name . " " . $user->apellido_p . " " . $user->apellido_m;
                $lista->estado="ACTIVO";
                $lista->save();

                //DB::select('CALL InsertarMovimiento ("' . $user->id . '","create","recurso_promoventes","' . $promoventes->id . '","' . base64_encode(json_encode($promoventes)) . '"," ","El usuario ha creado una nueva relación de la promoventes con el recurso.")');
            }
        }

        $listas_calidad = DB::table('listas_calidad')
        ->where('listas_calidad.tipo','=',$tipo)
        ->where('listas_calidad.estado','=','ACTIVO')
        ->get();
        return response()->json(['listas_calidad'=>$listas_calidad]);
    }

    function cambia_rango_1($value,$id){
        $user=Auth::user();
        $compuesto=ListasCalidadModel::findOrFail($id);
        $compuesto->rango_1 = $value;
        $compuesto->captura = $user->name . " " . $user->apellido_p . " " . $user->apellido_m;
        $compuesto->estado="ACTIVO";
        $compuesto->update();

        if($compuesto->update()){
            return $compuesto;
        }else{
            return false;
        }
    }

    function cambia_rango_2($value,$id){
        $user=Auth::user();
        $compuesto=ListasCalidadModel::findOrFail($id);
        $compuesto->rango_2 = $value;
        $compuesto->captura = $user->name . " " . $user->apellido_p . " " . $user->apellido_m;
        $compuesto->estado="ACTIVO";
        $compuesto->update();

        if($compuesto->update()){
            return $compuesto;
        }else{
            return false;
        }
    }

    public function inactiva_compuesto($id)
    {
           $user=Auth::user();
          $compuesto=ListasCalidadModel::findOrFail($id);
          $compuesto->captura= $user->name . " " . $user->apellido_p . " " . $user->apellido_m;
          $compuesto->estado="INACTIVO";
          $compuesto->update();

          if($compuesto->update()){
            $listas_calidad = DB::table('listas_calidad')
            ->where('listas_calidad.tipo','=',$compuesto->tipo)
            ->where('listas_calidad.estado','=','ACTIVO')
            ->get();
            return response()->json(['listas_calidad'=>$listas_calidad]);
          }else{
              return false;
          }
    }

}
