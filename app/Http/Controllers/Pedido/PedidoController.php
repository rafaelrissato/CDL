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
                $pedido->desconto = $row[9];
                $pedido->entrega = $row[10];
                $pedido->valor = $row[8];
                $pedido->origem = $row[7];
                $pedido->data = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1]));;
                $pedido->save();

            }

        }
    }
}
