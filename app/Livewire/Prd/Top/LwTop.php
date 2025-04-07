<?php

namespace App\Livewire\Prd\Top;

use Livewire\Component;
use App\Models\Produto\PrdTop;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
class LwTop extends Component
{
    public $produtos;
    public $val = null;
    public function render()
    {
        $this->produtos = DB::table('prd_top')
        ->join('produtos', 'prd_top.produto_id', '=', 'produtos.id') 
        ->select('prd_top.*', 'produtos.name', 'produtos.ativo')
        ->orderBy('produtos.name', 'asc')
        ->orderBy('prd_top.ano', 'asc')
        ->orderBy('prd_top.mes', 'asc')
        ->get();
        $this->produtos = $this->produtos->where('ativo', true);
        $this->produtos = $this->produtos->groupBy('name');
            
        return view('livewire.prd.top.lw-top');
    }
}
