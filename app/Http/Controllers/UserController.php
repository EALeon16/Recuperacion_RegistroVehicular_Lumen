<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Helper\ResponseBuilder;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Hashing\BcryptHasher;

class UserController extends BaseController
{
    public function login(Request $request){
        $correo = $request->correo;
        $cedula = $request->cedula;

        $user = User::where('correo', $correo)->first();
        
        if(!empty($user)){
           
                
        $echo = "login-success";
            
        }else{
            
            $echo = "Usuario no registrado";
        }
        return $echo;
    }

    

    public function logout(Request $request){

    }

}