<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\Produto;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
class LwProdutoList extends Component
{
    public $produtos;
    public $filtro;
    public $categoriafiltro;

    #[On('update')]
    public function render()
    {
        if($this->categoriafiltro){
            $this->produtos = Produto::where('categoria_id', $this->categoriafiltro)->get();
        }else{
        $this->produtos = Produto::whereHas('categoria', function (Builder $query) {
            $query->where('tipo', $this->filtro);
         })->get();

        }
        $this->produtos = $this->produtos->sortBy('name');
        return view('livewire.prd.lw-produto-list');
    }
    public function filtros($id)
    {
        $this->categoriafiltro = $id;

    }
}
