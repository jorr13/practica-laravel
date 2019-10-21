<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){

        $usuarios = [
            'jerinson',
            'kerly',
            'michael',
            'alfredo',
        ];
        return view('user', compact('usuarios'));
   }

   public function show($id){
        return "esta es pa view de usuarios: {$id}";
   }
   public function create(){
        return 'paara crear un usuario nuevo';
   }
} 
