<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\InfoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('miprimeraruta', function (){
    return 'Bienvenidos aprendices';
});

Route::get('minombre/{nombre}/edad/{edad}', function($nombre, $edad){
    return 'Hola mi nombres es: ' . $nombre . ' y mi edad es: ' . $edad;
});

Route::get('micontrolador/{nombre}', [MiController::class,'saludo']);

Route::get('heladeria/{opcion}', [HeladeriaController::class,'calcular']);

Route::get('cursos/contacto', [CursoController::class,'contacto']);

Route::resource('cursos', CursoController::class);

Route::get('nosotros',[InfoController::class,'info']);
