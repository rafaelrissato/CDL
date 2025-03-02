<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Produto\Produto;

class ProdutoImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($rows as $row)
        {
            Produto::create([
                'name' => $row[0],
            ]);
        }

    }
    public function startRow(): int
    {
        return 2;
    }
}
