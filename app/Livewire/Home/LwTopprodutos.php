<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Produto\PrdSaidaCopilado;
class LwTopprodutos extends Component
{
    public $topmes;
    public $toppassado;

    public function render()
    {

        $data = Carbon::now();
        $this->topmes = PrdSaidaCopilado::where('mes','=',$data->month)->where('ano','=',$data->year)->get();
        $this->toppassado = PrdSaidaCopilado::where('mes','=',$data->subMonth()->month)->where('ano','=',$data->subMonth()->year)->get();
        $this->topmes = $this->topmes->sortByDesc('quantidade')->take(10);
        $this->toppassado = $this->toppassado->sortByDesc('quantidade')->take(10);


        return view('livewire.home.lw-topprodutos');
    }
}
