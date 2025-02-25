<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <font style="vertical-align: inherit;">Lista de Categorias</font>
            </h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table id="produto" class="table table-sm table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Tipo</th>
                        <th>Cadastrado</th>
                        <th>Produtos</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->name}}</td>
                        <td>{{$categoria->tipo}}</td>
                        <td>{{$categoria->created_at->format('d-m-Y')}}</td>
                        <td>{{$categoria->produtos->count()}}</td>
                        @if ($categoria->produtos->count() == 0)
                        <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" wire:click="delete('{{$categoria->id}}')" /></td>

                        @else
                        <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" disabled /></td>
                        @endif

                    </tr>

                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
