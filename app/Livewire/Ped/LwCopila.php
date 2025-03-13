<?php

namespace App\Livewire\Ped;

use Livewire\Component;
use App\Models\Pedido\Pedido;
use App\Models\Pedido\PedidoMes;


class LwCopila extends Component
{
    public  $pedidos;
    public function render()
    {
        $this->pedidos = PedidoMes::all();
        return view('livewire.ped.lw-copila');
    }
    public function copila($ano, $mes, $tudo = null)
    {

        if($mes >= 13){
            $ano = $ano + 1;
            $mes = 1;
        }

        $copilado = Pedido::whereMonth('data','=',$mes)->whereYear('data','=',$ano)->get();
        $copilado = $copilado->groupBy('origem');
        foreach ($copilado as $key => $copi) {
                $teste[$key]['quantidade'] = 0;
              foreach ($copi as $key2 => $cop) {
                  $teste[$key]['quantidade'] = $teste[$key]['quantidade'] + $cop->produtos->sum('cardapio');
              }
        $cop = PedidoMes::where('mes',$mes)->where('ano',$ano)->where('origem',$key)->first();
        if($cop == null){
            $cop = new PedidoMes;
        }

            $cop->mes = $mes;
            $cop->ano = $ano;
            $cop->origem = $key;
            $cop->produtos = $teste[$key]['quantidade'];
            $cop->desconto = $copi->sum('desconto');
            $cop->entrega = $copi->sum('entrega');
            $cop->valor = $copi->sum('valor');
            $cop->quantidade = $copi->count();
            $cop->save();

            if($tudo == true){
                if($copilado->count() != 0 ){
                    $this->copila($ano, $mes + 1,$tudo = true);
                };
            }

    }
}
}
