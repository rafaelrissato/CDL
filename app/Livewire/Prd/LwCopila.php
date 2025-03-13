<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\PrdSaidaCopilado;
use App\Models\Produto\PrdSaida;
class LwCopila extends Component
{
    public  $saidas;
    public  $mensagem = [];
    public function render()
    {
        $this->saidas = PrdSaidaCopilado::all();
        return view('livewire.prd.lw-copila');
    }
    public function copila($ano, $mes, $tudo = null)
    {

        if($mes >= 13){
            $ano = $ano + 1;
            $mes = 1;
        }
        $copilado = PrdSaida::whereMonth('data','=',$mes)->whereYear('data','=',$ano)->get();
        $copilado = $copilado->groupBy('produto_id');
        $valida = PrdSaidaCopilado::where('ano',$ano)->where('mes',$mes)->get();
            if($valida){
                foreach ($valida as $key => $vali) {
                    $vali->delete();
                }

            }
        foreach ($copilado as $key => $copi) {

            $idd = $key;
            copilaProduto($idd,$copi->sum('quantidade'),$ano,$mes);
            $this->dispatch('alert', text: 'Copilado', icon: 'success');

        }

        if($tudo == true){
            if($copilado->count() != 0 ){
                $this->copila($ano, $mes + 1,$tudo = true);
            };
        }


    }

}
