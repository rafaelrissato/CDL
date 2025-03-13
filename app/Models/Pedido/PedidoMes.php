<?php

namespace App\Models\Pedido;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PedidoMes extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'ped_mes';



}

