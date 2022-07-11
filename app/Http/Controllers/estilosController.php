<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estilosController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function stats(){
        return view('estilos.stats');
    }

    public function pricing(){
        return view('estilos.pricing');
    }

    public function table(){
        return view('estilos.table');
    }
}
