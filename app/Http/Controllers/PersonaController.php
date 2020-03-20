<?php

namespace App\Http\Controllers;

use App\Horario;
use App\Persona;
use DB;
use App\Http\Helper\ResponseBuilder;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class PersonaController extends BaseController
{
    

    public function crearPersona(Request $request){
        $cliente = new Persona();
        $cedula = $request->cedula;
        $user = Persona::where('cedula', $cedula)->first();
        if(!empty($user)){
           
                
            $echo = "Cedula ya registrada";
                
            }else{
                $cliente->cedula = $request->cedula;
                $cliente->nombres = $request->nombres;
                $cliente->apellidos = $request->apellidos;
                $cliente->fechaNacimiento = $request->fechaNacimiento;
                $cliente->correo = $request->correo;
                $cliente->celular = $request->celular;
                $cliente->direccion = $request->direccion;

                $cliente->save();
                $echo = "succes";
            }
            return $echo;
        


        
        
     
        
    }





   


}