<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <font style="vertical-align: inherit;">Lista de {{ucfirst(Request::segment(3))}}</font>
            </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <div class="input-group-append">
                        <a href="/produto/create/{{Request::segment(3)}}/" class="btn btn-default">
                            <i class="fas fa-plus"></i>
                        </a>
                        @if($categoriafiltro)
                        <a href="#" class="btn btn-default" wire:click="filtros('')">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table id="produto" class="table table-sm table-hover text-nowrap">

                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Categoria</th>
                        @if($filtro == 'cardapio')
                        <th>Custo</th>
                        <th>Venda</th>
                        <th>Lucros</th>
                        @endif

                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>{!! $produto->link !!}</td>
                            <td wire:click="filtros('{{$produto->categoria->id}}')">{{$produto->categoria->name}}</td>
                            @if($filtro == 'cardapio')
                                <td>{{real($produto->custo->valor)}}</td>
                                <td>{{real($produto->preco->online)}}</td>
                                <td>{{real($produto->preco->online - $produto->custo->valor )}}</td>
                                @endif
                            <td>{{$produto->created_at->format('d-m-Y')}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
