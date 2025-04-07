<div class="col-12">
    <div class="col-12">
        <div class="card">

                <div class="card-header">
                <h3 class="card-title">
                    <font style="vertical-align: inherit;">  {{ucfirst($filtro).' '.$filtroname}}</font>
                </h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <div class="input-group-append">
                                    <a href="/produto/create/{{Request::segment(3)}}/" class="btn btn-default">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                    @if($categoriafiltro)
                                     
                                    <a href="#" class="btn btn-default" wire:click="resetfiltro()">
                                        {{ucfirst($filtroname)}} 
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                    @endif
                                    <button class="btn btn-default" wire:click="ativo()">
                                        @if($ativos == 1)
                                        Apenas ativos
                                        @else
                                        Todos
                                        @endif  
                                         
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <font style="vertical-align: inherit;">Lista de {{ucfirst(Request::segment(3))}}</font>
            </h3>
             
        </div>
        <div class="card-body table-responsive p-0">
            <table id="myTable" class="table table-sm table-hover text-nowrap">

                <thead>
                    <tr>
                        <th style="width: 5px;">Top</th>
                        <th style="width: 5px;"></th>
                        <th>Produto</th>
                        <th>Status</th>
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
                            <td>{!! $produto->topmes !!}</td>
                            <td>{!! $produto->top->last()->categoria !!}º</td>
                            <td>{!! $produto->link !!}</td>
                            <td wire:click="status('{{ $produto->id }}')">{!! status($produto->ativo) !!}</td>
                            <td wire:click="filtros('{{$produto->categoria->id}}','{{ $produto->categoria->name }}')">{{$produto->categoria->name}}</td>
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
