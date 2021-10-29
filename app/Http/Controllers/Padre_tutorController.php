<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Padre_tutor;

class Padre_tutorController extends Controller
{
    
    
    //create
    public function create(){
    	return view('admin/padre_tutor/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$padre_tutor = new Padre_tutor($request->all());
    	$padre_tutor->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$padre_tutor=Padre_tutor::find($id);
    	return view('admin/padre_tutor/edit')->with('padre_tutor',$padre_tutor);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$padre_tutor=Padre_tutor::find($id);	
    	$padre_tutor->persona_id=$request->persona_id;
    	$padre_tutor->direccion=$request->direccion;
    	$padre_tutor->ocupacion=$request->ocupacion;
    	
    	$padre_tutor->save();
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
