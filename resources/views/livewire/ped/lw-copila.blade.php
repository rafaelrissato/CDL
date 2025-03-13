<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <font style="vertical-align: inherit;">Historico de Custo</font>
        </h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <div class="input-group-append">
                    <x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" wire:click="copila('2021','1','true')" />
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table id="produto" class="table table-sm table-hover text-nowrap">

            <thead>
                <tr>
                    <th>Ano</th>
                    <th>Mes</th>
                    <th>Pedidos</th>
                    <th>Produtos</th>
                    <th>Atualizado</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                @if($pedidos->count() == 0)
                <tr>
                    <td>2021</td>
                    <td>01</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Copila" wire:click="copila('2021','1')" /></td>
                </tr>
                @else
                    @php
                        $pedidos = $pedidos->sortBy([
                                ['ano', 'asc'],
                                ['mes', 'asc'],
                            ]);;

                    @endphp
                    @foreach ($pedidos->groupBy('ano') as $key => $ano)
                        @foreach ($ano->groupBy('mes') as $key2 => $mes)
                        <tr>
                        <td>{{$key}}</td>
                        <td>{{$key2}}</td>
                        <td>{{$mes->sum('quantidade')}}</td>
                        <td>{{$mes->sum('produtos')}}</td>
                        <td>{{$mes[0]->updated_at->format('d-m-Y')}}</td>
                        <td><x-adminlte-button class="btn-sm btn-outline-info" type="button" label="Copila" wire:click="copila('{{$key}}','{{$key2}}')" /></td>
                        </tr>
                        @endforeach
                        @if ($loop->last)
                        <tr>
                        <td>{{$key}}</td>
                        <td>{{$key2 + 1}}</td>
                        <td>0</td>
                        <td>0</td>
                        <td>{{$mes[0]->updated_at->format('d-m-Y')}}</td>
                        <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Copila" wire:click="copila('{{$key}}','{{$key2 + 1}}')" /></td>
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
