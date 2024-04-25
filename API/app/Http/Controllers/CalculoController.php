<?php

namespace App\Http\Controllers;


use App\Models\calculo;
use Illuminate\Http\Request;

class CalculoController extends Controller
{

    protected $calcular;

    public function __construct(calculo $calcular){
        $this->calcular = $calcular;
    }

    public function adicao(Request $req){
        $um = $req->input('numum');
        $dois = $req->input('numdois');
    $resultado = $this->calcular->somar($um, $dois);

    return response(['Resultado' => $resultado]);
    }

    public function subtracao(Request $req){
        $um = $req->input('numum');
        $dois = $req->input('numdois');
    $resultado = $this->calcular->subtrair($um, $dois);

    return response(['Resultado' => $resultado]);
    }

    public function divisao(Request $req){
        $um = $req->input('numum');
        $dois = $req->input('numdois');
    $resultado = $this->calcular->dividir($um, $dois);

    return response(['Resultado' => $resultado]);
    }

    public function multiplicacao(Request $req){
        $um = $req->input('numum');
        $dois = $req->input('numdois');
    $resultado =  $this->calcular->multiplicar($um, $dois);

    return response(['Resultado' => $resultado]);
    }
}
