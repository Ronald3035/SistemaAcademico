<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    //index
    public function index(){
    	//$persona=Persona::all(); mostrar todo
    	//get() : devuelve la peticion como una coleccion objeto
    	//paginate(): devuelve la peticion como una coleccion objetos paginados
    	//$persona=Persona::where('estado','1')->orderBy('id','desc')->paginate(3);
    	$personas=Persona::orderBy('id','desc')->paginate(10);
    	//dd($persona);
    	return view('admin/index')->with('personas',$personas);
    }
    //create
    public function create(){
    	return view('admin/persona/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$persona = new Persona($request->all());
    	$persona->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$persona=Persona::find($id);
    	return view('admin/persona/edit')->with('persona',$persona);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$persona=Persona::find($id);	
    	$persona->apellido_pat=$request->apellido_pat;
    	$persona->apellido_mat=$request->apellido_mat;
    	$persona->nombres=$request->nombres;
    	$persona->fecha_nac=$request->fecha_nac;
    	$persona->genero=$request->genero;
    	$persona->ci=$request->ci;
    	$persona->celular=$request->celular;
    	$persona->save();
    	return redirect()->route('persona.index');
    	//dd($persona);
    }
    //update
    //destroy
    public function destroy($id){
    	$persona =Persona::find($id);
    	//dd($persona);
    	if($persona->estado==1){
    		$persona->estado=0;
    	}
    	else {
    		$persona->estado=1;
    	}
    	$persona->save();
    	return redirect()->route('persona.index');

    }

}
