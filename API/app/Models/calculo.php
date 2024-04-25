<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calculo extends Model
{
    use HasFactory;

    public function somar($um, $dois){
        return $um + $dois;
    }

    
    public function subtrair($um, $dois){
        return $um - $dois;
    }

    
    public function dividir($um, $dois){
        return $um / $dois;
    }

    
    public function multiplicar($um, $dois){
        return $um * $dois;
    }

}
