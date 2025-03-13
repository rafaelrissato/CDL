<?php

namespace App\Livewire\Ped;

use Livewire\Component;
use App\Models\Pedido\Pedido;
use App\Models\Pedido\PedidoMes;

class LwHome extends Component
{
    public $pedidos;
    public function render()
    {
        $this->pedidos = PedidoMes::all();
        return view('livewire.ped.lw-home');
    }
}
