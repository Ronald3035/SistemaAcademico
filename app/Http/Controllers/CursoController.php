<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //create
    public function create(){
    	return view('admin/curso/create');
    }
    //store
    public function store(Request $request){
    	//dd($request);
    	$curso = new Curso($request->all());
    	$curso->save();
    	return redirect()->route('persona.index');
    }
    //show
    //edit
    public function edit($id){
    	$curso=Curso::find($id);
    	return view('admin/curso/edit')->with('curso',$curso);

    }
    public function update($id, Request $request){
    	//dd($request);
    	$curso=Curso::find($id);	
    	$curso->grado_id=$request->grado_id;
    	$curso->paralelo_id=$request->paralelo_id;	
    	$curso->save();
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
