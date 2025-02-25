<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\PrdCategoria;
use Livewire\Attributes\On;

class LwCategoriaList extends Component
{
    public $categorias;
    #[On('update')]
    public function render()
    {
        $this->categorias = PrdCategoria::all();
        return view('livewire.prd.lw-categoria-list');
    }
    public function delete($uuid)
    {
        $categoria = PrdCategoria::find($uuid);
        $categoria->delete();
        $this->dispatch('update');
    }
}
