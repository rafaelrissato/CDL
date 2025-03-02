<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Produto extends Model
{
    use HasFactory, HasUuids;

    public function categoria() : HasOne
    {
        return $this->hasOne(PrdCategoria::class, 'id', 'categoria_id');
    }
    public function preco() : HasOne
    {
        return $this->hasOne(PrdPreco::class, 'produto_id', 'id');
    }
    public function conf() : HasOne
    {
        return $this->hasOne(PrdConf::class, 'produto_id', 'id');
    }
    public function composicao() : HasMany
    {
        return $this->hasMany(PrdComposicao::class, 'pai_id', 'id');
    }
    public function composicaofilho() : HasMany
    {
        return $this->hasMany(PrdComposicao::class, 'filho_id', 'id');
    }
    public function custos() : HasMany
    {
        return $this->hasMany(PrdCusto::class, 'produto_id', 'id');
    }
    public function saida() : HasMany
    {
        return $this->hasMany(PrdSaida::class, 'produto_id', 'id');
    }
    public function saidames() : HasMany
    {
        return $this->hasMany(PrdSaidaCopilado::class, 'produto_id', 'id');
    }
    public function getLinkAttribute(){
        $link = '<a href="/produto/'.$this->id.'/show" class="text-decoration-none text-white font-weight-bold">'.ucfirst($this->name).'<a/>';
        return $link;
    }

    public function getCustoAttribute(){
        $custos = $this->custos->sortByDesc('created_at');
        return $custos->first();
    }
    public function getTaxaAttribute(){
        $dados['online'] = ($this->preco->online * 0.20) ;
        $dados['direto'] = ($this->preco->direto * 0.04) ;
        return $dados;
    }
    public function getComboAttribute(){
        $valo = $this->composicao->sum('venda');
        return $valo;
    }

}
