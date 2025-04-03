<?php

namespace app\Http\Controllers\produto;

use App\Http\Controllers\Controller;
use App\Models\Produto\Produto;
use App\Models\Produto\PrdComposicao;
use App\Models\Produto\PrdSaida;
use Illuminate\Http\Request;
use App\Imports\ProdutoImport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
class ProdutoTopController extends Controller
{
    public function index()
    {
        return view('produto.top.index');
    }
    public function copila()
    {
        return view('produto.top.copila');
    }
    
}
