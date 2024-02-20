<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //AGREGADO EN CLASE
        $proyectos = DB::table("proyectos")->get();
        return view("proyecto.index",["proyectos"=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*
        Proyectos::create($request->all());
        return redirect() -> route('proyecto.index') -> with('success', 'Post created successfully.');
        */
        
        // Crear una nueva instancia del modelo Proyectos.
        $proyecto = new Proyectos();

        // Asignar valores a los atributos del modelo.
        $proyecto->nombre_completo = $request->input('nombre_completo');
        $proyecto->email = $request->input('email');
        $proyecto->password = $request->input('password'); // Considera encriptar la contraseña antes de guardarla
        $proyecto->address = $request->input('address');
        $proyecto->city = $request->input('city');

        // Guardar el modelo en la base de datos.
        $proyecto->save();

        // Redireccionar a una ruta específica o retornar una vista con un mensaje de éxito.
        return redirect()->route('proyecto.index')->with('success', 'Proyecto creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyectos $proyectos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto = Proyectos::find($id);
        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_completo' => 'required|max:255',
            'email' => 'required',
        ]);
        $proyecto = Proyectos::find($id);
        $proyecto->update($request->all());
        return redirect()->route('proyecto.index')
        ->with('success','El proyecto se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $proyecto = Proyectos::find($id);
        $proyecto->delete();
        return redirect()->route('proyecto.index')
        ->with('success', 'el usuario ha sido eliminado correctamente');
    }
}
