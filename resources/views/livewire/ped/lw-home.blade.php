<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title font-style: vertical-align: inherit;">Pedidos</font>
            </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm">
                    <div class="input-group-append">
                            <button href="#"  wire:click="teste()" class="btn btn-default">
                                <i class="fas fa-arrow-left"></i>
                            </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive p-3">
            <table id="myTable" class="table table-sm table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Ano</th>
                        <th>AnoMes</th>
                        <th>Ifood</th>
                        <th>Direto</th>
                        <th>Total</th>
                        <th>Descontos</th>
                        <th>Entrega</th>
                        <th>Produtos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos->groupBy('ano') as $key => $ano)
                    @foreach ($ano->groupBy('mes') as $key2 => $mes)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$key2}}</td>
                        <td>{{$mes->where('origem','iFood')->sum('quantidade')}}</td>
                        <td>{{$mes->where('origem','Desktop')->sum('quantidade')}}</td>
                        <td>{{$mes->sum('quantidade')}}</td>
                        <td>{{real($mes->sum('desconto'))}}</td>
                        <td>{{real($mes->sum('entrega'))}}</td>
                        <td>{{real($mes->sum('valor'))}}</td>
                    </tr>
                    @endforeach
                    @endforeach

                </tbody>
            </table>
    </div>
</div>
