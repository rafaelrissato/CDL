<?php

namespace App\Livewire\Prd\Top;

use Livewire\Component;
use App\Models\Produto\Produto;
use App\Models\Produto\PrdCategoria;
use App\Models\Produto\PrdTop;
use App\Models\Produto\PrdSaidaCopilado;
use Illuminate\Database\Eloquent\Builder;

class LwTopCopila extends Component
{
    public $produtos;
    public $categorias;
    public $dado;
    public function render()
    {
        return view('livewire.prd.top.lw-top-copila');
    }
    public function copila()
    {
        $this->categorias = PrdCategoria::where('tipo', 'Cardapio')->get();
        $this->produtos = Produto::whereHas('categoria', function (Builder $query) {
            $query->where('tipo',  'cardapio' )->orWhere('tipo', 'complemento');
         })->get();
        $ano = 2021;
        $mes = 1;
        
        for ($i = 1; $ano <= 2025; $i++) {
            
             
             
            foreach ($this->produtos as $produto) {
                $topproduto = PrdTop::where('produto_id', $produto->id)->where('ano', $ano)->where('mes', $mes)->first();
                
                
                
                if(!$topproduto){
                   $topproduto = new PrdTop();
                   $topproduto->produto_id = $produto->id;
                   $topproduto->ano = $ano;
                   $topproduto->mes = $mes;
                   $topproduto->save();
                }else{
                    $topproduto->geral = null;
                    $topproduto->save();
                }
           } 
           $topgeral = PrdSaidaCopilado::where('ano', $ano)->where('mes', $mes)->orderBy('quantidade', 'desc')->get();
           
           foreach ($topgeral as $key => $top) {
                $topproduto = PrdTop::where('produto_id', $top->produto_id)->where('ano', $ano)->where('mes', $mes)->first();
                if($topproduto){
                    $topproduto->geral = $key + 1;
                    $topproduto->save();
                }
            }
            foreach($this->categorias as $categoria){
                $this->dado = $categoria->id;
                $topcategoria = PrdSaidaCopilado::whereHas('produto', function (Builder $query) {
                    $query->where('categoria_id', '=', $this->dado );
                 })->where('ano', $ano)->where('mes', $mes)->orderBy('quantidade', 'desc')->get();
                 foreach ($topcategoria as $key => $top) {
                    $topproduto = PrdTop::where('produto_id', $top->produto_id)->where('ano', $ano)->where('mes', $mes)->first();
                    if($topproduto){
                        $topproduto->categoria = $key + 1;
                        $topproduto->save();
                    }
                }
            }

           if($mes >= 12){
            $ano = $ano + 1;
            $mes = 0;
            $this->dispatch('alert', text: 'Copilado', icon: 'success');
        }
           $mes++;
        }
        $this->dispatch('alert', text: 'Copilado', icon: 'success');
    }
}
