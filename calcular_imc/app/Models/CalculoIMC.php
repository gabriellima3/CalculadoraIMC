<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoIMC extends Model
{
    public function calcular()
    {
        if (isset($_GET['altura']) && isset($_GET['peso'])) {
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];
            $altura = str_replace(',', '.', $altura);
            $altura = $altura * $altura;
            $resultado = $peso / $altura;
            $imc = number_format($resultado, 2, '.', '');
            return $imc;
        }
    }
}
