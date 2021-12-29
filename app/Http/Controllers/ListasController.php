<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListasModel;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class ListasController extends Controller
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
       $listas = DB::table('listas')->get();

       return view('listas.index', ['listas' => $listas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$user=Auth::user();
        $lista=new ListasModel;
        $lista->tipo=$request->get('tipo');
        $lista->nombre=$request->get('nombre');
        $lista->estado="ACTIVO";
        $lista->save();
       // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');

        return Redirect::to('/listas');
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
        $listas=ListasModel::findOrFail($id);
        return view("listas.edit",["listas"=>$listas]);
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
      //  $user=Auth::user();
        $lista=ListasModel::findOrFail($id);
        $lista->tipo=$request->get('tipo');
        $lista->nombre=$request->get('nombre');
        $lista->estado="ACTIVO";
        $lista->update();
        return Redirect::to('/listas');
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
            $lista=ListasModel::findOrFail($id);
           // $lista->captura=$user->name;
            $lista->estado="INACTIVO";
            $lista->update();
            return $lista;

    }
}
