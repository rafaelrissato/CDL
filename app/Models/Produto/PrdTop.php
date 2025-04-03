<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasOne;
class PrdTop extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'prd_top';

    public function produto() : HasOne
    {
        return $this->hasOne(Produto::class, 'id', 'produto_id');
    }


}
