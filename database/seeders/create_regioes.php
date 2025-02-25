<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\liga\Regiao;

class create_regioes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Regiao::insert([
            'regiao' => 'lta sul'
        ]);
    }
}
