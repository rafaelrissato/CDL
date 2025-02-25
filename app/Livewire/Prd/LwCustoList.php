<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\Produto;
use App\Models\Produto\PrdCusto;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class LwCustoList extends Component
{
    use WithPagination;
    public $produto;
    public $filtro;
    public $valor;
    protected $paginationTheme = 'bootstrap';
    #[On('update')]
    public function render()
    {
        $this->produto = Produto::find($this->filtro);

        return view('livewire.prd.lw-custo-list',
        [
            'custos' =>  PrdCusto::where('produto_id', $this->produto->id)->orderBy('created_at', 'desc')->paginate(5),
        ]
    );
    }


    public function store()
    {
        $valida = PrdCusto::where('produto_id', $this->produto->id)->where('tipo', 2)->where('created_at', '>=', date('Y-m-d 00:00:00'))->first();
        if($valida){
            $valida->valor = quantidade($this->valor);
            $valida->save();
            $this->valor = '';
        }else{
        $custo = new PrdCusto();
        $custo->produto_id = $this->produto->id;
        $custo->tipo = 2;
        $custo->valor = quantidade($this->valor);
        $custo->save();
        $this->valor = '';
     }

     foreach($this->produto->composicaofilho as $pai){

        updatecusto($pai->pai_id, 4);
     }
    }
    public function delete($id)
    {
        $custo = PrdCusto::find($id);
        $custo->delete();
    }
}
