<?php

namespace App\Livewire\Prd;
use App\Models\Produto\Produto;
use Livewire\Component;

class LwPaiList extends Component
{
    public $produto;
    public $filtro;
    public function render()
    {
        $this->produto = Produto::find($this->filtro);
        return view('livewire.prd.lw-pai-list');
    }
    public function teste()
    {

        $this->dispatch('pergunta', title: 'Ei, espera aí!', text: 'Isso atualiza a quantidade em todos os produtos? Tem certeza?', icon: 'warning');
    }
    public function Confirmed()
    {

        $this->dispatch('pergunta', title: 'Ei, espera aíss!', text: 'Isso atualiza a quantidade em todos os produtos? Tem certeza?', icon: 'warning');
    }
}
