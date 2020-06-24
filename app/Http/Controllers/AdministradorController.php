<?php

namespace App\Http\Controllers;

use App\Region;
use App\Usuario;
use Freshwork\ChileanBundle\Rut;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view-admin');

        $administradores = Usuario::with(['ciudad'])->admin()->get();

        return view('administradores.index', compact('administradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create-admin');
        $regiones = Region::all();

        return view('administradores.create', compact('regiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create-admin');

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

        return redirect()->route('administradores.index');
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
        $this->authorize('edit-admin');

        $admin = Usuario::with(['ciudad.provincia.region'])->findOrFail($id);
        $regiones = Region::all();

        return view('administradores.edit', compact('admin', 'regiones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->authorize('edit-admin');

        $admin = Usuario::findOrFail($id);

        $request->validate([
            "nombre" => 'required',
            "email" => ['required','email', Rule::unique('usuarios')->ignore($admin->id)],
            "apellido" => 'required',
            "direccion" => 'required',
            "ciudad_id" => 'required',
            "rut" => ['required','cl_rut', Rule::unique('usuarios')->ignore($admin->id)],
            "password" => 'min:8|confirmed',
        ]);


        $admin->update($request->all());

        return redirect()->route('administradores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete-admin');
    }
}
