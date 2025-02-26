<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use App\Models\Produto\PrdCategoria;
use App\Models\Produto\Produto;
use App\Models\Produto\PrdCusto;
use App\Models\Produto\PrdPreco;
use App\Models\Produto\PrdConf;
class LwProdutoCreate extends Component
{
    public $filtro;
    public $categorias;
    public $name;
    public $categoria;
    public $produtos;
    public function render()
    {
        $this->categorias = PrdCategoria::where('tipo',$this->filtro)->get();
        return view('livewire.prd.lw-produto-create');
    }
    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'categoria' => 'required',
        ]);
        $prd = new Produto();
        $prd->name = ucfirst(strtolower($this->name));
        $prd->categoria_id = $this->categoria;
        $prd->save();

        $custo = new PrdCusto();
        $custo->produto_id = $prd->id;
        $custo->save();
        $preco = new PrdPreco();
        $preco->produto_id = $prd->id;
        $preco->save();
        $conf = new PrdConf();
        $conf->produto_id = $prd->id;
        $conf->save();
        $this->name = '';
    }
}
