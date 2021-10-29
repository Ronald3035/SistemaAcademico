<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrativo;

class AdministrativoController extends Controller
{
    //
    //create
    public function create(){
    	return view('admin/administrativo/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$administrativo = new Administrativo($request->all());
    	$administrativo->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$administrativo=Administrativo::find($id);
    	return view('admin/administrativo/edit')->with('administrativo',$administrativo);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$administrativo=Administrativo::find($id);	
    	$administrativo->persona_id=$request->persona_id;
    	$administrativo->formacion=$request->formacion;
    	$administrativo->cargo=$request->cargo;
    	
    	$administrativo->save();
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
