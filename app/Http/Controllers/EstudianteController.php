<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    //
     //create
    public function create(){
    	return view('admin/estudiante/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$estudiante = new Estudiante($request->all());
    	$estudiante->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$estudiante=Estudiante::find($id);
    	return view('admin/estudiante/edit')->with('estudiante',$estudiante);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$estudiante=Estudiante::find($id);	
    	$estudiante->persona_id=$request->persona_id;
    	$estudiante->padre_tutor_id=$request->padre_tutor_id;
    	$estudiante->rude=$request->rude;
    	
    	$estudiante->save();
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
