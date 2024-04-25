<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {
        return Produtos::all();
    }

    public function store(Request $req) {
        Produtos::create([
            "name" => $req->name,
            "price" => $req->price

        ]);

        return response(["OK"], 200);
    }

    public function update(Request $req) {
        $produto = Produtos::find($req->id);

        $produto->name = $req->name;
        $produto->price = $req->price;

        $produto->save();

        return response("Tudo certo", 200);
    }

    public function delete(Request $req){
        $produto = Produtos::find($req->id);

        $produto->delete();

        return response("Produto apagado", 200);
    }
}
