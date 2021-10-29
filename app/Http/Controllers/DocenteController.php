<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    //
    //create
    public function create(){
    	return view('admin/docente/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$docente = new Docente($request->all());
    	$docente->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$docente=Docente::find($id);
    	return view('admin/docente/edit')->with('docente',$docente);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$docente=Docente::find($id);	
    	$docente->persona_id=$request->persona_id;
    	$docente->especialidad=$request->especialidad;
    	$docente->horas_item=$request->especialidad; 	
    	$docente->save();
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
