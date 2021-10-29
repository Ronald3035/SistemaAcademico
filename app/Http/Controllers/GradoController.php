<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grado;

class GradoController extends Controller
{
    //create
    public function create(){
    	return view('admin/grado/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$grado = new Grado($request->all());
    	$grado->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$grado=Grado::find($id);
    	return view('admin/grado/edit')->with('grado',$grado);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$grado=Grado::find($id);	
    	$grado->nombre=$request->grado;	
    	$grado->save();
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
