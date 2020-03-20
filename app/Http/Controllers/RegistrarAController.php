<?php

namespace App\Http\Controllers;

use App\Horario;
use App\Alquiler;
use App\Persona;
use DB;
use App\Http\Helper\ResponseBuilder;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class RegistrarAController extends BaseController
{
    

    public function registrarAlquiler(Request $request, $cedula){
        $cliente = Persona::where('cedula',$cedula)->get();
        $clientes = Persona::where('cedula',$cedula)->first();
        if(!$cliente->isEmpty()){
            $alquiler = new Alquiler();
            $alquiler->hora_recogida = $request->hora_recogida;
            $alquiler->horario_id = $request->horario;
            $alquiler->persona_id = $clientes->persona_id;
            $alquiler->save();
            $echo = "registrado";
            
        }else{
            $echo = "debes ingresar usuario";
        }
        
   
        return $echo;  
        
    }



}