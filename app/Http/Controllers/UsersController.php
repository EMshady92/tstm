<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();


        //return UsersModel::get();
        return view('users.index',['users'=>$users]);
    }

     public function lista_usuarios()
    {
        $users = DB::table('users')->get();
       // return view('users.index');
        return $users;
    }

    public function modal_edit_users($id)
    {
        $user = DB::table('users')
        ->where('users.id','=',$id)
        ->first();

        return $user;
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

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar_usuario(Request $request){

        if ($request->ajax()) {
            //$user=Auth::user();
             $user=new UsersModel;
            $user->nombre=$request->get('nombre');
            $user->usuario=$request->get('usuario');
            $user->email=$request->get('email');
            $user->password=Hash::make( $request->get('password'));
            $user->estado="ACTIVO";
            $user->save();
           // DB::select('CALL InsertarMovimiento ("'.$user->id.'","create","tipos_promociones","'.$promocion->id.'","'.base64_encode(json_encode($promocion)).'"," ","El usuario ha creado un nuevo tipo de promoción")');

           return response()->json(['user'=>$user]);

        }

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

    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function actualiza_user(Request $request ,$id)
    {

        $user=UsersModel::findOrFail($id);
        $user->nombre=$request->get('nombre');
        $user->usuario=$request->get('usuario');
        $user->email=$request->get('email');
        $user->password=Hash::make( $request->get('password'));
        $user->estado="ACTIVO";
        $user->update();
        return response(['user'=>$user]);

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
        print_r('hola');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

              $user=UsersModel::findOrFail($id);
              $user->estado="INACTIVO";
              $user->update();
    }
}
