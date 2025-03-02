<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\PrdSaidaCopilado;
use Livewire\WithPagination;

class LwSaidas extends Component
{
    use WithPagination;
    public $filtro;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {


        return view('livewire.prd.lw-saidas',
        [
            'saidas' =>  PrdSaidaCopilado::where('produto_id', $this->filtro)->orderBy('ano', 'asc')->orderBy('mes', 'desc')->paginate(12),
        ]);
    }
}

