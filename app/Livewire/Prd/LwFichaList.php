<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\Produto;
use App\Models\Produto\PrdComposicao;
use App\Models\Produto\PrdCusto;
use Illuminate\Database\Eloquent\Builder;
class LwFichaList extends Component
{
    public $produto;
    public $produtos;
    public $filtro;
    public $quantidade;
    public $filho;
    public $fichavalor;

    public function render()
    {
        $this->produto = Produto::find($this->filtro);
        $this->fichavalor = $this->produto->composicao->sum('valor');
        $this->produtos = Produto::whereHas('categoria', function (Builder $query) {
            $query->where('tipo', 'Insumo');
         })->get();
        return view('livewire.prd.lw-ficha-list');
    }
    public function store()
    {
        $valida = PrdComposicao::where('pai_id', $this->filtro)->where('filho_id', $this->filho)->first();
        if($valida){
            $valida->quantidade = quantidade($this->quantidade);
            $valida->save();
            $this->filho = null;
            $this->quantidade = null;
        }else{
            $composicao = new PrdComposicao();
            $composicao->pai_id = $this->filtro;
            $composicao->filho_id = $this->filho;
            $composicao->quantidade = quantidade($this->quantidade);
            $composicao->save();
            $this->filho = null;
            $this->quantidade = null;
        }

        updatecusto($this->produto->id, 3);
        $this->dispatch('update');

    }
    public function delete($id)
    {
        $composicao = PrdComposicao::find($id);
        $composicao->delete();
        updatecusto($this->produto->id, 3);
        $this->dispatch('update');
    }
    public function change()
    {
        $pr = Produto::find($this->filho);
        $this->quantidade = $pr->conf->padraoFicha;
    }
}
