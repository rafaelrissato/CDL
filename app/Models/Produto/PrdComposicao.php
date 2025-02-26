<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasOne;
class PrdComposicao extends Model
{
    use HasFactory, HasUuids;

    public function produto() : HasOne
    {
        return $this->hasOne(Produto::class, 'id', 'filho_id');
    }
    public function pai() : HasOne
    {
        return $this->hasOne(Produto::class, 'id', 'pai_id');
    }
    public function getValorAttribute(){
       $valor = $this->produto->custo->valor * $this->quantidade;
       return $valor;
    }
    public function getVendaAttribute(){
        $valor = $this->produto->preco->online;
        return $valor;
     }

}
