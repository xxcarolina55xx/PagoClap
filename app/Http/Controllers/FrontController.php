<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;

class FrontController extends Controller
{
   public function index(){
        return view('usuario.index');
   }

   public function admin(){
        return view('admin.index');
   }


   public function contacto(){
        return view('contacto');
   }

   public function reviews(){
        return view('reviews');
   }

   public function login(){
        return view('layouts/login');
   }
    public function mostrarUsuario(){
        return view('usuario.usuarios');
   }
    public function openSystem(){
        return view('admin.openSystem');
   }
}
