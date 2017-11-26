<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;

use DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
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
        Usuario::create($request->all);
        return ['created' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Usuario::find($id);
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
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
        return ['update' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return['deleted' => true];
    }

    public function obtenerNoticiaUsuario(Request $request)
    {
        try {

            $datos = Usuario::with('noticias')->where('email', $request['email'])->first();
            return \Response::json($datos, 200);

        }catch(\Exception $e) {

            \Log::info('Error no se encontro las Noticias'. $e);
            return \Response::json('Error'.$e ,500); 

        }
    }

    public function obteneridUsuario(Request $request)
    {
        try {

            $datos = DB::table('users')
                     ->select('id','nombre')
                     ->where('email', $request['email'])
                     ->get();

            return \Response::json($datos, 200);

        }catch(\Exception $e) {

            \Log::info('Error no se encontro las Noticias'. $e);
            return \Response::json('Error'.$e ,500); 

        }
    }
}
