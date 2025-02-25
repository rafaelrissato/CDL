<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\Produto;
use Illuminate\Database\Eloquent\Builder;

class LwProdutoList extends Component
{
    public $produtos;
    public $filtro;
    public function render()
    {
        $this->produtos = Produto::whereHas('categoria', function (Builder $query) {
            $query->where('tipo', $this->filtro);
         })->get();


        return view('livewire.prd.lw-produto-list');
    }
}
