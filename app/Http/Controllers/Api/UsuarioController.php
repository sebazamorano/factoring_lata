<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Usuario;
use Freshwork\ChileanBundle\Rut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class  UsuarioController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Freshwork\ChileanBundle\Exceptions\InvalidFormatException
     */
    public function store(Request $request)
    {
        $perfil = null;
        $rules = [];
        if (Str::contains($request->getPathInfo(), 'administradores')) {
            $perfil = 'admin';
            $rules = [
                "nombre" => 'required',
                "email" => 'required|email|unique:usuarios',
                "apellido" => 'required',
                "direccion" => 'required',
                "ciudad_id" => 'required',
                "rut" => 'required|cl_rut|unique:usuarios',
                "password" => 'required|string|min:8|confirmed',
            ];
        } else if (Str::contains($request->getPathInfo(), 'ejecutivos')) {
            $perfil = 'ejecutivo';
            $rules = [
                "nombre" => 'required',
                "email" => 'required|email|unique:usuarios',
                "apellido" => 'required',
                "rut" => 'required|cl_rut|unique:usuarios',
                "password" => 'required|string|min:8|confirmed',
            ];
        } else if (Str::contains($request->getPathInfo(), 'clientes')) {
            $perfil = 'cliente';
            $rules = [
                "apodo" => 'required',
                "nombre" => 'required',
                "email" => 'required|email|unique:usuarios',
                "apellido" => 'required',
                "direccion" => 'required',
                "ciudad_id" => 'required',
                "ejecutivo_id" => 'required'
                //"rut" => 'required|cl_rut|unique:usuarios',
                //"password" => 'required|string|min:8|confirmed',
            ];
            $request->validate($rules);
            $request['rut'] = '9-0';
            $request['password'] = '9-0';
            $admin = Usuario::create($request->all());
            $admin->assign($perfil);
            $admin->clientes()->attach($request->get('ejecutivo_id'));

            return response()->json($admin);
        }
        $request->validate($rules);
        $request['rut'] = Rut::parse($request->get('rut'))->format(Rut::FORMAT_COMPLETE);
        $request['password'] = Hash::make($request['password']);

        $admin = Usuario::create($request->all());
        $admin->assign($perfil);

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
     * @param \App\Usuario $usuario
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return response()->json([
            ''
        ]);
    }
}
