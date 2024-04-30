<?php

namespace App\Http\Controllers;


use App\Models\Calculo;
use Illuminate\Http\Request;

class CalculoController extends Controller
{

    public function adicao(Request $request)
    {
        $um = $request->input('numum');
        $dois = $request->input('numdois');

        $resultado = $um + $dois ;

        $calculo = new Calculo();

        $calculo->numum = $um;
        $calculo->numdois = $dois ;
        $calculo->operacao = 'somar';
        $calculo->resultado =  $resultado;

        $calculo->save();

        return response(['Resultado' => $resultado]);
    }

    public function subtracao(Request $request)
    {
        $um = $request->input('numum');
        $dois = $request->input('numdois');

        $resultado = $um - $dois ;

        $calculo = new Calculo();

        $calculo->numum = $um;
        $calculo->numdois = $dois ;
        $calculo->operacao = 'subtrair';
        $calculo->resultado =  $resultado;

        $calculo->save();

        return response(['Resultado' => $resultado]);
    }

    public function divisao(Request $request)
    {
        $um = $request->input('numum');
        $dois = $request->input('numdois');

        $resultado = $um / $dois ;

        $calculo = new Calculo();

        $calculo->numum = $um;
        $calculo->numdois = $dois ;
        $calculo->operacao = 'divisao';
        $calculo->resultado =  $resultado;

        $calculo->save();

        return response(['Resultado' => $resultado]);
    }

    public function multiplicacao(Request $request)
    {
        $um = $request->input('numum');
        $dois = $request->input('numdois');

        $resultado = $um * $dois ;

        $calculo = new Calculo();

        $calculo->numum = $um;
        $calculo->numdois = $dois ;
        $calculo->operacao = 'multiplicacao';
        $calculo->resultado =  $resultado;

        $calculo->save();

        return response(['Resultado' => $resultado]);
    }
}
