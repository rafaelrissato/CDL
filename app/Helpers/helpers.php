<?php

use App\Models\Produto\Produto;
use App\Models\Produto\PrdCusto;
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
    $percentual = ($valor / $total) * 100;
    return number_format($percentual, 0, '.', ',') . ' %';
}

