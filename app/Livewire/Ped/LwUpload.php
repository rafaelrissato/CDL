<?php

namespace App\Livewire\Ped;

use Livewire\Component;
use Livewire\WithFileUploads;

class LwUpload extends Component
{
    use WithFileUploads;
    public $file;
    public function render()
    {
        return view('livewire.ped.lw-upload');
    }
    public function save()
    {
        $this->validate([
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        ]);
        $this->file->storeAs('planilhas', $this->file->getClientOriginalName());
 
        $this->file->store('photos');
    }
} 