<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    public function calcular($opcion){
        $valorHelado = 3000;
        $precioTopping = 0;
        $topping = '';
        $totalPagar = 0;

        if (is_numeric($opcion)){
            if($opcion == 1){
                $precioTopping = 500;
                $topping = 'chocolate';
            }
            elseif($opcion == 2){
                $precioTopping = 1000;
                $topping = 'brownie';
            }
            elseif($opcion == 3){
                $precioTopping = 1500;
                $topping = 'delicatessen';
            }
            else {
                $precioTopping = 0;
                $topping = 'inexistente';
            }

            $totalPagar = $valorHelado + $precioTopping;

            return 'El topping que usted escogió es: ' . $topping . ' y el precio total a pagar es: ' . $totalPagar;


        } //cierro el if que evalúa si es o no numérico
        else {
            echo 'La opción ingresada no es válida';
        }
    } //cierro el método
}  //cierro la clase
