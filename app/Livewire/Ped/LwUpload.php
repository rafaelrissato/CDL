<?php

namespace App\Livewire\Ped;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class LwUpload extends Component
{
    use WithFileUploads;
    public $file;
    public function render()
    {
        return view('livewire.ped.lw-upload');
    }
    public $arquivo;
    public $nomePersonalizado; // Opcional: se quiser permitir que o usuário defina um nome

    // Regras de validação
    protected $rules = [
        'arquivo' => 'required|file|mimes:csv,pdf|max:5120', // 5MB
    ];

    // Mensagens de erro
    protected $messages = [
        'arquivo.mimes' => 'Apenas arquivos CSV ou PDF são permitidos.',
        'arquivo.max' => 'O arquivo não pode exceder 5MB.',
    ];

    public function save()
    {
        $this->validate();

         
        $nomeArquivo = 'teste.' . $this->arquivo->extension();

         
        $caminhoPublico = $this->arquivo->storeAs('uploads', $nomeArquivo, 'public');

        

        $this->reset('arquivo'); // Limpa o campo após o upload
        session()->flash('success', 'Arquivo enviado com sucesso!');
    }
} 