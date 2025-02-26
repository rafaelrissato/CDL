<?php

namespace App\Http\Controllers\produto;

use App\Http\Controllers\Controller;
use App\Models\Produto\Produto;
use App\Models\Produto\PrdComposicao;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index($tipo)
    {
        return view('produto.index', compact('tipo'));
    }
    public function categoria()
    {
        return view('produto.categoria');
    }
    public function create()
    {
        return view('produto.create');
    }
    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produto.show', compact('produto'));
    }
    public function conf($id)
    {
        $produto = Produto::find($id);
        return view('produto.conf', compact('produto'));
    }
    public function clone($id,$pai)
    {

        $produto = Produto::find($pai);
        foreach ($produto->composicao as $composicao) {
            $novo = new PrdComposicao();
            $novo->pai_id = $id;
            $novo->filho_id = $composicao->filho_id;
            $novo->quantidade = $composicao->quantidade;
            $novo->save();
        }
        updatecusto($pai, 3);
        return redirect()->route('prd.show', $pai);
    }
}
