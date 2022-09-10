<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoIMC;

class   ImcController extends Controller
{
    public function index(){
        $CalculoIMC = new CalculoIMC();

        $valor = $CalculoIMC->calcular();

        return view('imc', ['valor'=>$valor]);
    }
}
