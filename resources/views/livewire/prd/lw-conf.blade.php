<div class="card card-primary card-outline">

    <div class="card-header">
        <h3 class="card-title">
            <font style="vertical-align: inherit;">Configuracao</font>
        </h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <div class="input-group-append">
                    <a href="{{route('prd.show', $produto->id)}}" class="btn btn-default">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table id="produto" class="table table-sm table-hover text-nowrap">

            <tbody>

                <tr>
                    <td>Venda direta</td>
                    <td >
                        <x-adminlte-input name='valor' type="number" wire:model="direto" >
                            <x-slot name="prependSlot"><div class="input-group-text">  R$ </div></x-slot>
                        </x-adminlte-input>
                    </td>

                </tr>
                <tr>
                    <td>Venda online</td>
                    <td>
                        <x-adminlte-input name='valor' type="number" wire:model="online" >
                            <x-slot name="prependSlot"><div class="input-group-text">  R$ </div></x-slot>
                        </x-adminlte-input>
                    </td>

                </tr>
                <tr>
                    <td>Padrao em ficha</td>
                    <td>
                        <x-adminlte-input name='valor' type="number" wire:model="padraoFicha" />
                    </td>

                </tr>
                <tr>
                    <td>Padrao de compra</td>
                    <td>
                        <x-adminlte-input name='valor' type="number" wire:model="padraoCompra" />
                    </td>

                </tr>
                <tr>
                    <td>Unidade de medida (UN - LT - KG)</td>
                    <td>
                        <x-adminlte-input name='valor' type="text" wire:model="medida" />
                    </td>

                </tr>
                <tr>
                    <td>Codigo</td>
                    <td>
                        <x-adminlte-input name='valor' type="text" wire:model="pdv" />
                    </td>

                </tr>
                <tr>
                    <td>Ativo </td>
                    <td>
                        <div class="form-check form-check-inline"  >
                            <input class="form-check-input" type="radio"  value='1' wire:model="ativo" />
                            <label class="form-check-label" for="inlineRadio1">sim</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value='0' wire:model="ativo"/>
                            <label class="form-check-label" for="inlineRadio2">nao</label>
                          </div>
                         
                    </td>

                </tr>
            </tbody>
        </table>
        <div class="p-3">
        <x-adminlte-button class="btn-lg btn-block" label='enviar' wire:click="submit">Adicionar</x-button>
        <div>
        </div>
  </div>
