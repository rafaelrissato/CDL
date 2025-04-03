<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <font style="vertical-align: inherit;">Nova categoria</font>
                </h3>
            </div>
            <div class="card-body table-responsive p-0">
                <div class="  p-3">
                    <form wire:submit.prevent="submit">
                       
                        <x-adminlte-select name="produto" label="produto" wire:model="produto">
                            <option value=""></option>
                            <option value="Cardapio">Cardapio</option>
                            <option value="Insumo">Insumo</option>
                            <option value="Combo">Combo</option>
                            <option value="Complemento">Complemento</option>
                        </x-adminlte-select>
                        <x-adminlte-input name="name" label="Lote" wire:model="lote"/>
                        <x-adminlte-input name="name" type="date" label="Validade" wire:model="validade"/>
                        <x-adminlte-input name="name" label="Quantidade" wire:model="peso"/> 
                        <x-adminlte-select name="produto" label="produto" wire:model="medida">
                            <option value=""></option>
                            <option value="Gr">Gramas</option>
                            <option value="UN">Unidades</option> 
                        </x-adminlte-select>
                        <x-adminlte-input name="name" label="Etiquetas" wire:model="quantidade"/> 
                        <x-adminlte-button label="Vizualizar" type="submit"/>
                        <x-adminlte-button label="Baiixar"  wire:click="baixar()"/>
                    </form>
                </div>
    
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="content page-break">
                <b>{{ $produto }}</b><br>
                <b>Lote:</b>{{ $lote }}<br>
                <b>Quantidade:</b>{{ $peso.' '.$medida }}<br>
                <b>Validade:</b> {{$validade}}</br>
                <b>Embalado:</b> {{$embalado}}<br>
                <b>Funcionario:</b> {{ $responsavel }}<br>
                 
            </div>
        </div>
    </div>
</div>
