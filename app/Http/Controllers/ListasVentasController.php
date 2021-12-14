<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ListasVentasModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class ListasVentasController extends Controller
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
        $lista_ventas = DB::table('listasVentas')->get();

        return view('listas_ventas.index', ['lista_ventas' => $lista_ventas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listas_ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lista_ventas=new ListasVentasModel;
        $lista_ventas->tipo=$request->get('tipo');
        $lista_ventas->nombre=$request->get('nombre');
        $lista_ventas->estado="ACTIVO";
        $lista_ventas->save();
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');

        return Redirect::to('/listas_ventas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lista_ventas=ListasVentasModel::findOrFail($id);
        return view("listas_ventas.edit",["lista_ventas"=>$lista_ventas]);
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
        $lista_ventas=ListasVentasModel::findOrFail($id);
        $lista_ventas->tipo=$request->get('tipo');
        $lista_ventas->nombre=$request->get('nombre');
        $lista_ventas->estado="ACTIVO";
        $lista_ventas->update();
        return Redirect::to('/listas_ventas');
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
         $lista_ventas=ListasVentasModel::findOrFail($id);
         // $lista->captura=$user->name;
          $lista_ventas->estado="INACTIVO";
          $lista_ventas->update();
    }
}
