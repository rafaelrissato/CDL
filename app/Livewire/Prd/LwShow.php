<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\Produto;
use Livewire\Attributes\On;

class LwShow extends Component
{
    public $produto;
    public $filtro;

    #[On('update')]
    public function render()
    {

        $this->produto = Produto::find($this->filtro);
        return view('livewire.prd.lw-show');
    }
}
