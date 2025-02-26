<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <font style="vertical-align: inherit;">Ficha tecnica</font>
        </h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table id="produto" class="table table-sm table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Tipo</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>%</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produto->composicao as $ficha)
                 <tr>
                      <td>{!! $ficha->produto->link !!}</td>
                      <td wire:click="edit('{{$ficha->produto->id}}')">{{$ficha->produto->categoria->name}}</td>
                      <td>{{$ficha->quantidade}}</td>
                      <td>{{real($ficha->valor)}}</td>
                      <td>{{percentual($ficha->valor,$produto->custo->valor)}}</td>
                      <td><x-adminlte-button class="btn-sm btn-outline-danger" type="button" label="Delete" wire:click="delete('{{$ficha->id}}')" /></td>
                 </tr>
                @endforeach
                 <tr>
                    <td>
                        <select class="form-control form-control-sm"wire:change="change" wire:model="filho">
                            <option value="">Selecione</option>
                            @foreach ($produtos as $produto)
                                <option value="{{$produto->id}}">{{$produto->categoria->name.' - '.$produto->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>

                    </td>
                    <td>
                        <input type="text" class="form-control form-control-sm" wire:model="quantidade">
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>
                        <x-adminlte-button class="btn-sm btn-outline-primary" type="button" label="Add" wire:click="store" />
                    </td>
            </tbody>
        </table>
    </div>
  </div>
