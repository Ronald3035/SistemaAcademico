<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paralelo;

class ParaleloController extends Controller
{
    //create
    public function create(){
    	return view('admin/paralelo/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$paralelo = new Paralelo($request->all());
    	$paralelo->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$paralelo=Paralelo::find($id);
    	return view('admin/paralelo/edit')->with('paralelo',$paralelo);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$paralelo=Grado::find($id);	
    	$paralelo->nombre=$request->paralelo;	
    	$paralelo->save();
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

}
