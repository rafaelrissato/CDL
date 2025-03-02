<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasOne;
class PrdSaida extends Model
{
    use HasFactory, HasUuids;

    protected $casts = [
        'data' => 'date'
    ];
    public function produto() : HasOne
    {
        return $this->hasOne(Produto::class, 'id', 'filho_id');
    }


}
