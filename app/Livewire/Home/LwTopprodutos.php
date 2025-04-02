<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Produto\PrdSaidaCopilado;
use Illuminate\Database\Eloquent\Builder;
class LwTopprodutos extends Component
{
    public $topmes;
    public $toppassado;
    public $filtro; 
    public $data; 
    
    public function render()
    {
 
        $this->data = Carbon::now();
        $this->topmes = PrdSaidaCopilado::where('mes','=',$this->data->month)->where('ano','=',$this->data->year)->whereHas('produto', function (Builder $query) {
            $query->whereHas('categoria', function (Builder $query) {
                $query->where('name','=', $this->filtro);
             });
         })->get();
        $this->toppassado = PrdSaidaCopilado::where('mes','=',$this->data->subMonth()->month)->where('ano','=',$this->data->subMonth()->year)->whereHas('produto', function (Builder $query) {
            $query->whereHas('categoria', function (Builder $query) {
                $query->where('name','=', $this->filtro);
             });
         })->get();
        $this->topmes = $this->topmes->sortByDesc('quantidade')->take(10);
        $this->toppassado = $this->toppassado->sortByDesc('quantidade')->take(10);


        return view('livewire.home.lw-topprodutos');
    }
}
