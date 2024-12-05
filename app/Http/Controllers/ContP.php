<?php

namespace App\Http\Controllers;

use App\Models\Actores;
use App\Models\Peliculas;
use Illuminate\Http\Request;

class ContP extends Controller
{
    public function index(){
        $t1 = Actores::all();

        return view('index',compact('t1'));
    }
    public function formpeli(){
        return view('formpeli');
    }

    public function formact(){
        return view('formact');
    }

    public function actores(){
        $actores = Actores::all();

        return view('actores',compact('actores'));
    }

    public function peliculas(){
        $peliculas = Peliculas::all();

        return view('peliculas',compact('peliculas'));
    }

    public function agregaract(Request $request,Actores $act_crear){
        $request->validate([
            'nom_act' => 'required',
            'desc_act'=>'required',
            'pelfa_act' => 'required',
            'imagen_act' => 'required|image|mimes:jpg,png,gif'
        ],[
            'nombre.required' => 'Falta el nombre baboso',
            'desc_act.required' => 'Falta la descipcion pendeja',
            'imagen_act.required'=>'Necesitas subir una foto'
        ]);

        $foto=time().'.'.$request->imagen_act->extension();
        $request->imagen_act->move(public_path('subidas'),$foto);

        $act_crear=Actores::create([
            'nom_act'=>$request->nom_act,
            'pelfa_act'=>$request->pelfa_act,
            'desc_act'=>$request->desc_act,
            'imagen_act'=>$foto
        ]);

        return redirect()->route('actores')->with('mensaje','Se agrego el actor');
    }
    public function agregarpeli(Request $request, Peliculas $pel_crear)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nom_pel' => 'required|string|max:255',
            'sinop_pel' => 'required|string',
            'dura_pel' => 'required|string|max:10',
            'cat_pel' => 'required|string',
            'clas_pel' => 'required|string',
            'imagen_pel' => 'required|image|mimes:jpg,png,gif'
        ], [
            'nom_pel.required' => 'El nombre de la película es obligatorio.',
            'sinop_pel.required' => 'La sinopsis es obligatoria.',
            'dura_pel.required' => 'La duración es obligatoria.',
            'cat_pel.required' => 'Debes seleccionar una categoría.',
            'clas_pel.required' => 'Debes seleccionar una clasificación.',
            'imagen_pel.required' => 'Debes subir una imagen de la película.',
            'imagen_pel.image' => 'El archivo debe ser una imagen.',
            'imagen_pel.mimes' => 'La imagen debe ser en formato JPG, PNG o GIF.',
        ]);
    
        // Manejo de la imagen
        $foto = time() . '.' . $request->imagen_pel->extension();
        $request->imagen_pel->move(public_path('subidas'), $foto);
    
        // Creación del registro en la base de datos
        $pel_crear = Peliculas::create([
            'nom_pel' => $request->nom_pel,
            'sinop_pel' => $request->sinop_pel,
            'dura_pel' => $request->dura_pel,
            'cat_pel' => $request->cat_pel,
            'clas_pel' => $request->clas_pel,
            'imagen_pel' => $foto
        ]);
    
        // Redirección con mensaje de éxito
        return redirect()->route('peliculas')->with('mensaje', 'Película agregada correctamente');
    }
    
    public function editaractores($act_edi){
        $actores=Actores::find($act_edi);

        return view('editaractores',compact('actores'));
    }
    public function editarpelicula($pel_edi){
        $pelicula=Peliculas::find($pel_edi);

        return view('editarpeliculas',compact('pelicula'));
    }
    public function actualizarpelicula(Request $request, Peliculas $pel_up){

        $request->validate([
            'nom_pel' => 'required|string|max:255',
            'sinop_pel' => 'required|string',
            'dura_pel' => 'required|string|max:10',
            'cat_pel' => 'required|string',
            'clas_pel' => 'required|string',
            'imagen_pel' => 'required|image|mimes:jpg,png,gif'
        ], [
            'nom_pel.required' => 'El nombre de la película es obligatorio.',
            'sinop_pel.required' => 'La sinopsis es obligatoria.',
            'dura_pel.required' => 'La duración es obligatoria.',
            'cat_pel.required' => 'Debes seleccionar una categoría.',
            'clas_pel.required' => 'Debes seleccionar una clasificación.',
            'imagen_pel.required' => 'Debes subir una imagen de la película.',
            'imagen_pel.image' => 'El archivo debe ser una imagen.',
            'imagen_pel.mimes' => 'La imagen debe ser en formato JPG, PNG o GIF.',
        ]);

        $pel_up->update($request->all());
    

        Return redirect()->route('peliculas')->with('mensaje','Se guardaron los cambios del actor');
    }
    public function actualizaractores(Request $request, Actores $act_up){

        
        $request->validate([ 
            'nom_act' => 'required|string|max:255',
         'pelfa_act' => 'required|string|max:255',
          'desc_act' => 'required|string|max:500',
           'imagen_act' => 'nullable|image|mimes:jpeg,png,jpg,gif'],
           [
            'nombre.required' => 'Falta el nombre baboso',
            'desc_act.required' => 'Falta la descipcion pendeja',
            'imagen_act.required'=>'Necesitas subir una foto'
        ]);

        $act_up->update($request->all());
    

        Return redirect()->route('actores')->with('mensaje','Se guardaron los cambios del actor');
    }
    public function filtrarAct(Request $request)
    {
        $buscar = $request->input('buscar');
    
        if ($buscar) {
            $actores = Actores::where('nom_act', 'LIKE', '%' . $buscar . '%')->get();
        } else {
            $actores = Actores::all();
        }
    
        return view('actores', compact('actores'));
    }
    public function borraract($dato){
        $act_borrar=Actores::find($dato);

        $act_borrar->delete();

        Return redirect()->route('actores');

    }
    public function borrarpelicula($pelicula){
        $pel_borrar=Peliculas::find($pelicula);

        $pel_borrar->delete();

        Return redirect()->route('peliculas');

    }
    public function filtrarpel(Request $request)
    {
        $buscar = $request->input('buscar');
    
        if ($buscar) {
            $peliculas = Peliculas::where('nom_pel', 'LIKE', '%' . $buscar . '%')->get();
        } else {
            $peliculas = Peliculas::all();
        }
    
        return view('peliculas', compact('peliculas'));
    }

    public function ordenarpel($ord_pel){

        $peliculas=[];

        switch($ord_pel){
            case 'nom_pel': $peliculas=Peliculas::orderby('nom_pel','asc')->get();
            break;
            case 'cat_pel': $peliculas=Peliculas::orderby('cat_pel','asc')->get();
            break;
        }
        return view('peliculas',compact('peliculas'));

    }
    public function ordenaract($ord_act){

        $actores=[];

        switch($ord_act){
            case 'nom_act': $actores=Actores::orderby('nom_act','asc')->get();
            break;
            case 'pelfa_act': $actores=Actores::orderby('pelfa_act','asc')->get();
            break;
        }
        return view('actores',compact('actores'));

    }
}

