<?php
//aquí comentamos 1 línea
/*
comentario
de varias líneas

*/
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MiController extends Controller {
    public function prueba(){
        return 'estoy en un controlador';
    }

    public function saludo($nombre){
        return 'Hola mi nombre es: ' . $nombre;
    }
}
