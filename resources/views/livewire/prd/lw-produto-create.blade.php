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
                    <x-adminlte-input name="name" label="Produto" wire:model="name"/>
                    <x-adminlte-select name="tipo" label="categoria" wire:model="categoria">
                        <option value=""></option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                        @endforeach
                    </x-adminlte-select>

                    <x-adminlte-button label="Button" type="submit"/>
                </form>
            </div>

        </div>
    </div>
</div>
