<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function comprobar(Request $request){
        $nombre=$request->input("name");
        $contraseña=$request->input("pass");
        if(($nombre==="Gómez")&&($contraseña==="alibaba")){
            echo "Inicio de sesión correcto";
        }
        else{
            echo "Inicio de sesión incorrecto";
        }
    }

    public function calcular(Request $request){
        $altura=$request->input("altura");
        $diametro=$request->input("diametro");
        $resultado=M_PI*pow(($diametro/2),2)*$altura;
        echo "El volumen del cilindro es de ".$resultado;
    }

    public function precioMedio(Request $request){
        $precio1=$request->input("precio1");
        $precio2=$request->input("precio2");
        $precio3=$request->input("precio3");
        $result=($precio1+$precio2+$precio3)/3;
        echo "El precio medio del producto es de : ".$result;
    }
}
