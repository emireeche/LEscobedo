<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;

class DetalleServicio extends Controller
{
 
    public function index(){
        $servicios= Servicio::all();
        return view('welcome',compact('servicios'));
    }
}
