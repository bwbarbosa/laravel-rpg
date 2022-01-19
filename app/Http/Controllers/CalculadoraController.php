<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora()
    {
        return view('calculadora');
    }

    public function soma(Request $request)
    {   // Pegar variáveis do formulário
        $num1 = $request->num1;
        $num2 = $request->num2;
        // Calcular soma
        $result = $num1 + $num2;
        //
        return view('resultado', compact('result'));
    }
}