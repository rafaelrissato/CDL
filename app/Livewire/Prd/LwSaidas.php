<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\PrdSaidaCopilado;
use Livewire\WithPagination;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\lineChartModel;
class LwSaidas extends Component
{
    use WithPagination;
    public $filtro;
    public $anos;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $expenses = PrdSaidaCopilado::where('produto_id', $this->filtro)->orderBy('ano', 'asc')->orderBy('mes', 'asc')->get();
        $a = $expenses->groupBy('ano');
        foreach ($a as $key => $value) {
             foreach ($value->sortBy('mes') as $key2 => $value2) {
                 $anos[$key][$value2->mes]   = $value2->quantidade;
             }


        }

        $anos = $anos ?? [];


        $lineChartModel = (new LineChartModel())
        ->setTitle('Vendas Mensais por Produto')
        ->multiLine()
        ->darkMode();
        foreach ($anos as $key => $meses) {
            foreach ($meses as $key2 => $mes) {
                $lineChartModel->addSeriesPoint($key,  $key2, $mes  );
            }

        }




        return view('livewire.prd.lw-saidas',
        [
            'multiLineChartModel' => $lineChartModel,
            'saidas' =>  PrdSaidaCopilado::where('produto_id', $this->filtro)->orderBy('ano', 'asc')->orderBy('mes', 'desc')->paginate(12),

        ]);
    }
}

