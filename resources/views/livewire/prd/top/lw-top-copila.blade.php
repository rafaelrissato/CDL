 



  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Atenção! Processo Demorado!</h4>
    <strong>Aviso:</strong> Esta ação irá compilar <strong>todos os produtos</strong> e pode levar vários minutos.
    <p>Deseja realmente continuar?</p>
    
    <hr>
    <div wire:loading.remove>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <a type="button" href="{{ route('prd.top.home') }}" class="btn btn-danger">Cancelar</a>
        <button type="button" class="btn btn-warning" wire:click="copila">Middle</button> 
      </div>
    </div>
    <div wire:loading>
        Processing Payment...
    </div>
  </div>