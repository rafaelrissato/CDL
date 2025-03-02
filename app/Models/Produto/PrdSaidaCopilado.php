<?php

namespace App\Models\Produto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class PrdSaidaCopilado extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'pro_saida_mes';
}
