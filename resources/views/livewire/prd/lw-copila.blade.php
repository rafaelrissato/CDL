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
                    <th>Ano</th>
                    <th>Mes</th>
                    <th>Produtos</th>
                    <th>Quantidades</th>
                    <th>Atualizado</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @if($saidas->count() == 0)
                <tr>
                    <td>2021</td>
                    <td>01</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" wire:click="copila('2021','1')" /></td>
                </tr>
                @else
                    @php
                        $saidas = $saidas->sortBy([
                                ['ano', 'asc'],
                                ['mes', 'asc'],
                            ]);;

                    @endphp
                    @foreach ($saidas->groupBy('ano') as $key => $ano)
                        @foreach ($ano->groupBy('mes') as $key2 => $mes)
                        <tr>
                        <td>{{$key}}</td>
                        <td>{{$key2}}</td>
                        <td>{{$mes->count()}}</td>
                        <td>{{$mes->sum('quantidade')}}</td>
                        <td>{{$mes[0]->updated_at->format('d-m-Y')}}</td>
                        <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" wire:click="copila('{{$key}}','{{$key2}}')" /></td>
                        </tr>
                        @endforeach
                        @if ($loop->last)
                        <tr>
                        <td>{{$key}}</td>
                        <td>{{$key2 + 1}}</td>
                        <td>0</td>
                        <td>0</td>
                        <td>{{$mes[0]->updated_at->format('d-m-Y')}}</td>
                        <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" wire:click="copila('{{$key}}','{{$key2 + 1}}')" /></td>
                        </tr>
                        @endif
                    @endforeach
                @endif

            </tbody>
        </table>
        <div class="  p-3">

        </div>
    </div>
  </div>
