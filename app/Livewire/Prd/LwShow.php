<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\Produto;

class LwShow extends Component
{
    public $produto;
    public $filtro;
    public function render()
    {
        $this->produto = Produto::find($this->filtro);
        return view('livewire.prd.lw-show');
    }
}
