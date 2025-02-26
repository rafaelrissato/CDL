<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\PrdCategoria;

class LwCategoriaCreate extends Component
{
    public $name;
    public $tipo;
    public $calculo;
    public function render()
    {
        return view('livewire.prd.lw-categoria-create');
    }
    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'tipo' => 'required',
        ]);
        $categoria = new PrdCategoria();
        $categoria->name = ucfirst(strtolower($this->name));
        $categoria->tipo = $this->tipo;
        $categoria->calculo = $this->calculo;
        $categoria->save();
        $this->reset();
        $this->dispatch('update');
    }
}
