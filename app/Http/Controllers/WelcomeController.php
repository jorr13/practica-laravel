<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke($nick, $apodo = null){
        if($apodo){
            return "tu nick es: {$nick} y tu apodo es {$apodo}";
        }else{
            return "tu nick es: {$nick} y no tienes apodo";
        }
    }
}
