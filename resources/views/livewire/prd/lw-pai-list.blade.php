<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title font-style: vertical-align: inherit;">Produtos com esse item na composicao</font>
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
        <div class="card-body table-responsive p-0">
            <table id="produto" class="table table-sm table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Categoria</th>
                        <th>Quantidade</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produto->composicaofilho as $prd)
                        <tr>
                            <td>{!!$prd->pai->link!!}</td>
                            <td>{{$prd->pai->categoria->name}}</td>
                            <td>{{$prd->quantidade}}</td>
                            <td>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
