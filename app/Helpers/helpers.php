<?php

use App\Models\Produto\Produto;
use App\Models\Produto\PrdCusto;
use App\Models\Produto\PrdConf;
use App\Models\Produto\PrdCategoria;
use App\Models\Produto\PrdPreco;
use App\Models\Produto\PrdSaidaCopilado;
use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Builder;


function real($valor)
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}
function quantidade($valor)
{
    return str_replace(",",".", $valor);
}
function custoTipo($tipo)
{
    $tipos = [
        1 => 'Primeiro',
        2 => 'Manual',
        3 => 'Alteração de item da ficha técnica.',
        4 => 'Alteração do valor de item da ficha técnica.',
    ];
    return $tipos[$tipo];
}
function updatecusto($id, $tipo = 3){
    $produto = Produto::find($id);
    $fichavalor = $produto->composicao->sum('valor');
    if($fichavalor != $produto->custo->valor){

        $custo = new PrdCusto();
        $custo->produto_id = $produto->id;
        $custo->tipo =  $tipo;
        $custo->valor = $fichavalor;
        $custo->save();

    }
}
function percentual($valor, $total)
{
    if($total == 0){
        return '0 %';
    }else{
    $percentual = ($valor / $total) * 100;
    return number_format($percentual, 0, '.', ',') . ' %';
    }

}
function idproduto($filtro,$row)
{
    $produto = PrdConf::where('PDV', $filtro)->first();
    if($produto){
        return $produto->produto_id;
    }else{
        $produto = new Produto();
        $produto->name = ucfirst(strtolower($row[5]));
        $produto->categoria_id = idcategoria($row[7]);
        $produto->save();
        $custo = new PrdCusto();
        $custo->produto_id = $produto->id;
        $custo->save();
        $preco = new PrdPreco();
        $preco->produto_id = $produto->id;
        $preco->save();
        $conf = new PrdConf();
        $conf->produto_id = $produto->id;
        $conf->PDV = $filtro;
        $conf->save();
        return $produto->id;
    }

}
function idcategoria($filtro)
{
    $cate = PrdCategoria::where('name', $filtro)->first();
    if($cate){
        return $cate->id;
    }else{
        $categoria = new PrdCategoria();
        $categoria->name = ucfirst(strtolower($filtro));
        if($filtro == 'Complemento'){
            $categoria->tipo = 'Complemento';

        }else{
            $categoria->tipo = 'Cardapio';

        }
        $categoria->calculo = 1;
        $categoria->save();
        return $categoria->id;
    }

}
function idpedido($filtro)
{
    $pedido = Pedido::where('codigo', $filtro)->first();
    return $pedido->id;

}
function copilaProduto($id,$quantidade,$ano,$mes)
{
     $produto = Produto::find($id);

     if($produto->categoria->calculo == 1){
        $novo = new PrdSaidaCopilado;
        $novo->produto_id = $id;
        $novo->quantidade = $quantidade;
        $novo->mes = $mes;
        $novo->ano = $ano;
        $novo->save();
     }else{
        foreach($produto->composicao as $composicao)
        {
            $novo = new PrdSaidaCopilado;
            $novo->produto_id = $id;
            $novo->quantidade = $quantidade;
            $novo->mes = $mes;
            $novo->ano = $ano;
            $novo->save();
            copilaProduto($composicao->produto->id,($quantidade * $composicao->quantidade),$ano,$mes);
        }
     }

}
