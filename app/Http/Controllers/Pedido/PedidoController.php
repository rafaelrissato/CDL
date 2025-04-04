<?php

namespace App\Http\Controllers\Pedido;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\PedidoImport;
use App\Models\Pedido\Pedido;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;


class PedidoController extends Controller
{
    public function import(){
        $collection = Excel::toCollection(new PedidoImport, 'pedidos.xlsx');
        foreach ($collection[0] as $row)
        {


            if (is_numeric($row[0])) {
                $ped = Pedido::where('codigo', $row[0])->first();
                if($ped){
                    $pedido = Pedido::find($ped->id);
                }else{
                    $pedido = new Pedido;
                }
                $pedido->codigo = $row[0];
                $pedido->desconto = $row[8];
                $pedido->entrega = $row[9];
                $pedido->valor = $row[10];
                if($row[7] == 'iFood'){
                    $pedido->origem = 'iFood';
                }else{
                    $pedido->origem = 'Desktop';
                }

                $pedido->data = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1]));;
                $pedido->save();

            }

        }
    }
    public function copila(){
        return view('pedido.copila');

    }
    public function home(){
        return view('pedido.home');

    }
}
