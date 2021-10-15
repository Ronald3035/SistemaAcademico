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
    	$persona=Persona::where('estado','1')->orderBy('id','desc')->paginate(2);
    	//dd($persona);
    	return view('admin/index')->with('persona',$persona);
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
    //update
    //destroy

}
