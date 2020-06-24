<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;

class AdministradorController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre" => 'required',
            "email" => 'required|email|unique:usuarios',
            "apellido" => 'required',
            "direccion" => 'required',
            "ciudad_id" => 'required',
            "rut" => 'required|cl_rut|unique:usuarios',
            "password" => 'required|string|min:8|confirmed',
        ]);

        $request['rut'] = Rut::parse($request->get('rut'))->format(Rut::FORMAT_WITH_DASH);

        $admin = Usuario::create($request->all());
        $admin->assign('admin');

        return response()->json($admin);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
