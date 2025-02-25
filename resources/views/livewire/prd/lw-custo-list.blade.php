<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <font style="vertical-align: inherit;">Historico de Custo</font>
        </h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table id="produto" class="table table-sm table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Valor</th>
                    <th>Tipo</th>
                    <th>Atualizado</th>
                    <th>açoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($custos as $custo)
                <tr>
                    <td>{{real($custo->valor)}}</td>
                    <td>{{custoTipo($custo->tipo)}}</td>
                    <td>{{$custo->updated_at->diffForHumans( )}}</td>
                    @if ($custo->tipo == 2)
                    <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" wire:click="delete('{{$custo->id}}')" /></td>

                    @else
                    <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" disabled /></td>
                    @endif
                </tr>
                @endforeach
                @if ($produto->categoria->calculo == 1)
                <tr>
                    <td><x-adminlte-input name='valor' type="text" wire:model="valor" /></td>
                    <td><x-adminlte-button label='enviar' wire:click="store">Adicionar</x-button></td>
                    <td></td>
                    <td></td>

                </tr>
                @endif

            </tbody>
        </table>
        <div class="  p-3">
        {{ $custos->links() }}
        </div>
    </div>
  </div>
