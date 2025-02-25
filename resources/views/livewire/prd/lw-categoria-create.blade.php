<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <font style="vertical-align: inherit;">Nova categoria</font>
            </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <div class="  p-3">
                <form wire:submit.prevent="submit">
                    <x-adminlte-input name="name" label="Categoria" wire:model="name"/>
                    <x-adminlte-select name="tipo" label="Tipo" wire:model="tipo">
                        <option value=""></option>
                        <option value="Cardapio">Cardapio</option>
                        <option value="Insumo">Insumo</option>
                        <option value="Combo">Combo</option>
                    </x-adminlte-select>
                    <x-adminlte-select name="tipo" label="Calculo de custo" wire:model="calculo">
                        <option value=""></option>
                        <option value="1">Industrializado</option>
                        <option value="2">Ficha tecnica</option>
                        <option value="3">Combo</option>
                    </x-adminlte-select>
                    <x-adminlte-button label="Button" type="submit"/>
                </form>
            </div>

        </div>
    </div>
</div>
