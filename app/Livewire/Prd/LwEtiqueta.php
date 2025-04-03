<?php

namespace App\Livewire\Prd;

use Livewire\Component;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
class LwEtiqueta extends Component
{
    public $produto;
    public $validade;  
    public $lote;  
    public $embalado;  
    public $quantidade = 1;
    public $peso;
    public $medida;
    public $responsavel = "Rafael";
    public $pdf;
    public $customPaper;
    public function render()
    {
        $this->embalado = CARBON::now()->format('d/m/Y');
        $this->validade = CARBON::create($this->validade)->format('d/m/Y');
        return view('livewire.prd.lw-etiqueta');
    }
    public function submit()
    {
       
    }
    public function baixar()
    {
        $dados = [
            'produto' => $this->produto,
            'validade' => $this->validade,
            'lote' => $this->lote,
            'embalado' => $this->embalado,
            'quantidade' => $this->quantidade,
            'peso' => $this->peso,
            'medida' => $this->medida,
            'responsavel' => $this->responsavel
        ];
        $customPaper = array(1, 1,  170.079 ,113.386); 
        $pdfContent = PDF::loadView('produto.modelo',$dados)->setPaper($customPaper)->output();
        return response()->streamDownload(
             fn () => print($pdfContent),
             "filename.pdf"
        );
    }
}
