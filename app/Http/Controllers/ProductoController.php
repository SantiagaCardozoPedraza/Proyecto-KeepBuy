<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']=Producto::paginate(2);
        return view('VistaAdministrador.pagina',$datos); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('VistaAdministrador.productedit');
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

            'NombreProducto'=>'required|string|max:100',
            'MarcaProducto'=>'required|string|max:100',
            'CategoriaProducto'=>'required',


            'DescripcionProducto'=>'required|string|max:255',
            'FechaDeEntradaProducto'=>'required|date',
            'FechaDeVencimientoProducto'=>'required|date',
            'CantidadProducto'=>'required|integer',
            'DescuentoProducto'=>'required|integer',
            'PrecioProducto'=>'required|integer',
            'ImagenProducto'=>'required|max:10000|mimes:jpeg,png,jpg',

        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'ImagenProducto.required'=>'La imagen del producto es requerida',
    


        ];

        $this->validate($request,$campos,$mensaje);


        //$datosProducto = request()->all();
        $datosProducto = request()->except('_token');
           if ($request->hasFile('ImagenProducto')){
               $datosProducto['ImagenProducto']=$request->file('ImagenProducto')->store('uploads','public');



           }


        Producto::insert($datosProducto);

      // return response()->json($datosProducto);
      return redirect('VistaAdministrador')->with('mensaje','Producto Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto=Producto::findOrFail($id);
        //return view('VistaAdministrador.edit');  
         return view('VistaAdministrador.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $campos=[

            'NombreProducto'=>'required|string|max:100',
            'MarcaProducto'=>'required|string|max:100',
            'CategoriaProducto'=>'required',


            'DescripcionProducto'=>'required|string|max:255',
            'FechaDeEntradaProducto'=>'required|date',
            'FechaDeVencimientoProducto'=>'required|date',
            'CantidadProducto'=>'required|integer',
            'DescuentoProducto'=>'required|integer',
            'PrecioProducto'=>'required|integer',
    

        ];

        $mensaje=[
            'required'=>'La :attribute es requerido',

        ];
        if ($request->hasFile('ImagenProducto')){
          $campos=[  'ImagenProducto'=>'required|max:10000|mimes:jpeg,png,jpg',];
          $mensaje=['ImagenProducto'=>'La imagen del producto es requerida'];
         } 

        $this->validate($request,$campos,$mensaje);

        $datosProducto = request()->except(['_token','_method']);
        if ($request->hasFile('ImagenProducto')){
            $producto=Producto::findOrFail($id); 
            Storage::delete('public/'.$producto->ImagenProducto);


            $datosProducto['ImagenProducto']=$request->file('ImagenProducto')->store('uploads','public');
        }
        Producto::where ('id','=',$id)->update($datosProducto);
        $producto=Producto::findOrFail($id); 
         //return view('VistaAdministrador.edit',compact('producto'));
         return redirect('VistaAdministrador')->with('mensaje','Producto Modificado');
    }
       /* }
              */
                  /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //



        $producto=Producto::findOrFail($id); 

        if(Storage::delete('public/'.$producto->ImagenProducto)){
            Producto ::destroy($id);


        }

        
        return redirect('VistaAdministrador')->with('mensaje','Producto Borrado');

    }
}
