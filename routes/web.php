<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\Padre_tutorController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\ParaleloController;
use App\Http\Controllers\CursoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/student', function () {
    //return view('welcome');
//});
//Route::get('/admin',function(){
	//return view('admin/index');
//});
//Route::get('/list', [PersonaController::class, 'index']);
Route::get('/template',function(){
	return view('template/index');
});
Route::resource('persona',PersonaController::class);
Route::get('persona/{id}/destroy',[PersonaController::class,'destroy'])->name('persona.destroy');

Route::resource('padre_tutor',Padre_tutorController::class);
Route::resource('estudiante',EstudianteController::class);
Route::resource('docente',DocenteController::class);
Route::resource('administrativo',AdministrativoController::class);

Route::resource('grado',GradoController::class);
Route::resource('paralelo',ParaleloController::class);
Route::resource('curso',CursoController::class);