<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['VistaPersona']=Persona::paginate(2);
        return view('VistaPersona.user-list',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('VistaPersona.Crearpersona');
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
        $campos=[

            'IdentificacionCliente'=>'required|string|max:100',
            'NombreCliente'=>'required|string|max:100',
            'ApelllidoCliente'=>'required|string|max:100',
            'TipoIdentificacionCliente'=>'required',
            'FechaDeNacimientoCliente'=>'required|date',
            'GeneroCliente'=>'required',
            'DireccionCliente'=>'required|string|max:100',
            'CorreoCliente'=>'required|email',
            'TelefonoCliente'=>'required|string|max:100',


        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'FechaDeNacimientoCliente.required'=>'La fecha de nacimiento es requerida',
            'DireccionCliente.required'=>'La direcciones es requerida',



        ];

        $this->validate($request,$campos,$mensaje);











       // $datosPersona=request()->all();
       $datosPersona=request()->except('_token');
       Persona::insert($datosPersona);
        //return response()->json($datosPersona);

        return redirect('VistaPersona')->with('mensaje','Usuario agregado con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona=Persona::findOrFail($id);
        return view('VistaPersona.Editarpersona',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[

            'IdentificacionCliente'=>'required|string|max:100',
            'NombreCliente'=>'required|string|max:100',
            'ApelllidoCliente'=>'required|string|max:100',
            'TipoIdentificacionCliente'=>'required',
            'FechaDeNacimientoCliente'=>'required|date',
            'GeneroCliente'=>'required',
            'DireccionCliente'=>'required|string|max:100',
            'CorreoCliente'=>'required|email',
            'TelefonoCliente'=>'required|string|max:100',


        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'FechaDeNacimientoCliente.required'=>'La fecha de nacimiento es requerida',
            'DireccionCliente.required'=>'La direcciones es requerida',



        ];

        $this->validate($request,$campos,$mensaje);







        $datosPersona=request()->except(['_token','_method']);
        Persona::where('id','=',$id)->update($datosPersona); 
        
        $persona=Persona::findOrFail($id);
        //return view('VistaPersona.Editarpersona',compact('persona'));
        return redirect('VistaPersona')->with('mensaje','Usuario modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Persona::destroy($id);
        return redirect('VistaPersona')->with('mensaje','Usuario Borrado con exito');

    }
}
