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
    public $filtroname;
    public $ativos = 1;
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
        if($this->ativos == 1){
            $this->produtos = $this->produtos->where('ativo', true);
        }
        $this->produtos = $this->produtos->sortBy('name');
        return view('livewire.prd.lw-produto-list');
    }
    public function filtros($id, $name)
    {
        $this->categoriafiltro = $id;
        $this->filtroname = $name;
    }
    public function resetfiltro()
    {
        $this->categoriafiltro = null;
        $this->filtroname = null;
    }
    public function ativo()
    {
        $this->ativos = 2;
        $this->dispatch('update');
    }
    public function status($id)
    {
        $pd = Produto::find($id);
        
        $pd->ativo = !$pd->ativo;
        $pd->save();
    }
 
     
}
