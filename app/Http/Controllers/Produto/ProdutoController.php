<?php

namespace App\Http\Controllers\produto;

use App\Http\Controllers\Controller;
use App\Models\Produto\Produto;
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
}
