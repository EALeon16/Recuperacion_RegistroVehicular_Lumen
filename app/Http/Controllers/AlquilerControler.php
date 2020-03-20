<?php

namespace App\Http\Controllers;

use App\Horario;
use App\Persona;
use DB;
use App\Http\Helper\ResponseBuilder;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class AlquilerControler extends BaseController
{
    

    public function getAlL(Request $request){
        
            
       $horarios=DB::table('vehiculo_horarioa')
       ->join('vehiculo_vehiculo', 'vehiculo_vehiculo.vehiculo_id', '=', 'vehiculo_horarioa.vehiculo_id')
       ->select('vehiculo_horarioa.fecha_recogida','vehiculo_horarioa.fecha_devolucion',
        'vehiculo_horarioa.dias','vehiculo_horarioa.precio_total', 
        'vehiculo_vehiculo.placa','vehiculo_vehiculo.marca','vehiculo_horarioa.horarioA_id', 
        'vehiculo_vehiculo.modelo',
        'vehiculo_vehiculo.tipo_vehiculo')
       ->get();
       if(!$horarios->isEmpty()){
        $status = true;
        $info = "Data is listed succesfully";
    }else{
        $status = false;
        $info = "Data is not listed succesfully";
    }
       return ResponseBuilder::result($status, $info, $horarios);
        
    }





   


}
