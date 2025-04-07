<div>
    <form wire:submit.prevent="save">
        <div class="mb-3">
            <label class="form-label">Selecione o Arquivo:</label>
            <input type="file" wire:model="arquivo" class="form-control" enctype="multipart/form-data">
            @error('arquivo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Campo opcional para nome personalizado -->
        <div class="mb-3">
            <label class="form-label">Nome do Arquivo (opcional):</label>
            <input type="text" wire:model="nomePersonalizado" class="form-control" placeholder="Ex: pedidos_2023">
        </div>

        <button type="submit" class="btn btn-primary">
            @if($arquivo)
                <i class="fas fa-spinner fa-spin" wire:loading></i>
                <span wire:loading.remove>Enviar Arquivo</span>
            @else
                <i class="fas fa-upload"></i> Enviar Arquivo
            @endif
        </button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
</div>