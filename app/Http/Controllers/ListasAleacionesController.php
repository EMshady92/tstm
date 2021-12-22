<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListasAleacionesModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class ListasAleacionesController extends Controller
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

    public function guardar_nueva_aleacion($nombre,$id_cliente){

        $tipos = DB::table('listas_aleaciones')
        ->select('listas_aleaciones.tipo')
        ->get();


        $tipos_num = count($tipos);

        if($tipos_num == 0){
            $tipos_num = 1;
        }else{
            $tipos_num = $tipos_num + 1;
        }

        $user=Auth::user();
        $aleacion=new ListasAleacionesModel;
        $aleacion->id_cliente=$id_cliente;
        $aleacion->tipo=$tipos_num;
        $aleacion->nombre=$nombre;
        $aleacion->estado="ACTIVO";
        $aleacion->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario ." Email:" .$user->email;
        $aleacion->save();
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');

       return response()->json(['aleacion'=>$aleacion,'tipos_num'=>$tipos_num]);



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

    public function editar_aleacion($nombre,$id){


        $user=Auth::user();
        $aleacion=ListasAleacionesModel::findOrFail($id);
        $aleacion->nombre=$nombre;
        $aleacion->estado="ACTIVO";
        $aleacion->captura="Nombre: ". $user->nombre ." Usuario:". $user->usuario ." Email:" .$user->email;
        $aleacion->update();
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');

       if ($aleacion->update()){
           $aleaciones = DB::table('listas_aleaciones')
           ->where('listas_aleaciones.estado','=','ACTIVO')
           ->orderBy('created_at','DESC')->get();
           return response()->json(['aleacion'=>$aleacion,'aleaciones'=>$aleaciones]);
       }else{
           return false;
       }



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
            /*  $user=Auth::user(); */
            $aleacion=ListasAleacionesModel::findOrFail($id);
            // $lista->captura=$user->name;
            $aleacion->estado="INACTIVO";
            $aleacion->update();
            return $aleacion;
    }

    public function traer_aleaciones($id_cliente)
    {
        $aleaciones =DB::table('listas_aleaciones')
        ->where('listas_aleaciones.id_cliente','=',$id_cliente)
        ->where('listas_aleaciones.estado','=','ACTIVO')
        ->get();

        $cliente =DB::table('listas_clientes')
        ->where('listas_clientes.id','=',$id_cliente)
        ->first();
        return response()->json(['cliente'=>$cliente,'aleaciones'=>$aleaciones]);
    }

    public function validar_aleacion($id_cliente)
    {


        $tipo =DB::table('listas_aleaciones')
        ->where('listas_aleaciones.id','=',$id_cliente)
        ->where('listas_aleaciones.estado','=','ACTIVO')
        ->first()->tipo;

        $aleaciones =DB::table('listas_calidad')
        ->where('listas_calidad.tipo','=',$tipo)
        ->where('listas_calidad.estado','=','ACTIVO')
        ->get();


        return response()->json(['aleaciones'=>$aleaciones]);
    }

}
