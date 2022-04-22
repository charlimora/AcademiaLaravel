<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtroController extends Controller
{
    public function Algo($edad){

        if ($edad < 18){
            echo 'es un menor de edad';
        }
        else if ($edad >=18 and $edad < 28){
            echo 'usted es un adulto joven';
        }
        else {
            echo 'edad no existe';
        }
    }
}
