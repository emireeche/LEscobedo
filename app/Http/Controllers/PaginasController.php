<?php

namespace App\Http\Controllers;
use App\Models\Llanta;
use App\Models\Servicio;

use Illuminate\Http\Request;

class PaginasController extends Controller
{


    public function index()
    {
        $llantas= Llanta::all();
        return view('welcome', compact('llantas'));
    }
}
