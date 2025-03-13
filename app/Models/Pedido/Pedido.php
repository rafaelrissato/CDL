<?php

namespace App\Models\Pedido;

use App\Models\Produto\PrdSaida;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pedido extends Model
{
    use HasFactory, HasUuids;

    public function produtos(): HasMany
        {
            return $this->hasMany(PrdSaida::class, 'pedido_id', 'id');
        }



}

