<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title font-style: vertical-align: inherit;">Produtos com esse item na composicao</font>
            </h3>

        </div>
        <div class="card-body table-responsive p-0">
            <table id="produto" class="table table-sm table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Ano</th>
                        <th>Mes</th>
                        <th>Quantidade</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($saidas->sortBy('mes', SORT_NATURAL) as $saida)
                        <tr>

                            <td>{{$saida->ano}}</td>
                            <td>{{$saida->mes}}</td>
                            <td>{{$saida->quantidade}}</td>
                            <td>{{$saida->updated_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </table>
        <div class="  p-3">
        {{ $saidas->links() }}
        </div>
    </div>
</div>
