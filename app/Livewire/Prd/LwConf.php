<?php

namespace App\Livewire\Prd;
use App\Models\Produto\Produto;

use Livewire\Component;

class LwConf extends Component
{
    public $produto;
    public $filtro;
    public $online;
    public $direto;
    public $padraoFicha;
    public $padraoCompra;
    public $medida;
    public $pdv;
    public $ativo;
    public function render()
    {
        $this->produto = Produto::find($this->filtro);

        $this->online = $this->produto->preco->online;
        $this->direto = $this->produto->preco->direto;
        $this->padraoCompra = $this->produto->conf->padraoCompra;
        $this->padraoFicha = $this->produto->conf->padraoFicha;
        $this->medida = $this->produto->conf->medida;
        $this->pdv = $this->produto->conf->PDV;
        $this->ativo = $this->produto->ativo;

        return view('livewire.prd.lw-conf');
    }
    public function submit()
    {

        $this->produto->preco->online = quantidade($this->online);
        $this->produto->preco->direto = quantidade($this->direto);
        $this->produto->preco->save();
        $this->produto->conf->padraoCompra = quantidade($this->padraoCompra);
        $this->produto->conf->padraoFicha = quantidade($this->padraoFicha);
        $this->produto->conf->medida = $this->medida;
        $this->produto->conf->PDV = $this->pdv;
        $this->produto->conf->save();
        $this->produto->ativo = $this->ativo;
        $this->produto->save();
        $this->dispatch('alert', text: 'Configuraçao do produto atualizado com sucesso', icon: 'success');

    }
}
