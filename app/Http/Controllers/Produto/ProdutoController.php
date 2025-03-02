<?php

namespace App\Http\Controllers\produto;

use App\Http\Controllers\Controller;
use App\Models\Produto\Produto;
use App\Models\Produto\PrdComposicao;
use App\Models\Produto\PrdSaida;
use Illuminate\Http\Request;
use App\Imports\ProdutoImport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
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
    public function copila()
    {

        return view('produto.copila');
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
    public function import()
    {
        $collection = Excel::toCollection(new ProdutoImport, '2.xlsx');
        unset($collection[0][0]);
        foreach ($collection[0] as $row)
        {

            //$teste =
            //echo idcategoria($row[7]).'<br>';
            if (is_numeric($row[1])) {
                $saida = new PrdSaida;
                $saida->produto_id = idproduto($row[15],$row);
                $saida->pedido_id = idpedido($row[9]);
                $saida->quantidade = $row[1];
                $saida->data = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0]));;
                $saida->save();

            }

        }
    }
}
