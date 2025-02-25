<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
class PrdCategoria extends Model
{
    use HasFactory, HasUuids;

    public function produtos() : HasMany
    {
        return $this->hasMany(Produto::class, 'categoria_id', 'id');
    }
}
