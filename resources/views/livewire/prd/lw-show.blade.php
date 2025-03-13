<div>


    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="profile-username text-center">Custos</h3>


        </div>
        <div class="card-body table-responsive p-0">
            <table id="produto" class="table table-sm table-hover text-nowrap">
                <thead>
                    <tr>
                        <th></th>
                        <th>Direto</th>
                        <th>Ifood</th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <td>Custo Insumos</td>
                        <td>{{real($produto->custo->valor)}}</td>
                        <td>{{real($produto->custo->valor)}}</td>
                    </tr>
                    <tr>
                        <td>Custo Variavel</td>
                        <td>{{real($produto->custo->valor * 0.1)}}</td>
                        <td>{{real($produto->custo->valor * 0.1)}}</td>
                    </tr>
                    <tr>
                        <td>Custo Taxas</td>
                        <td>{{real($produto->taxa['direto'])}}</td>
                        <td>{{real($produto->taxa['online'])}}</td>
                    </tr>
                    <tr>
                        <td>Custo Total</td>
                        <td class="font-weight-bold">{{real($produto->taxa['direto'] + ($produto->custo->valor * 1.1))}}</td>
                        <td class="font-weight-bold">{{real($produto->taxa['online'] + ($produto->custo->valor * 1.1))}}</td>
                    </tr>
                    <tr>
                        <td>Custo Taxas</td>
                        <td>{{real($produto->taxa['direto'])}}</td>
                        <td>{{real($produto->taxa['online'])}}</td>
                    </tr>
                    <tr>
                        <td>Valor venda</td>
                        <td>{{real($produto->preco->direto)}}</td>
                        <td>{{real($produto->preco->online)}}</td>
                    </tr>
                    </tr>
                    <tr>
                        <td>Custo Taxas</td>
                        <td class="font-weight-bold">{{real(($produto->preco->direto - ($produto->custo->valor * 1.1)) - $produto->taxa['direto'])}}</td>
                        <td class="font-weight-bold">{{real(($produto->preco->online - ($produto->custo->valor * 1.1)) - $produto->taxa['online'])}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
      </div>












    <div class="card card-primary card-outline">
    <div class="card-body">



      <div class="card-body table-responsive p-0">
        <table id="produto" class="table table-sm table-hover text-nowrap">
            <tbody>
                @if($produto->categoria->calculo == 3)
            <tr>
                <td> DE {{real($produto->combo)}}</td>
                <td class="font-weight-bold">Por {{real($produto->preco->online)}}</td>
                @endif
            </tr>
            <tr>
                <td>Quandidade de saida</td>
                <td class="font-weight-bold">{{$produto->saidames->sum('quantidade')}}</td>

            </tr>
                    <tr>
                        <td>Preço de venda</td>
                        <td class="font-weight-bold">{{real($produto->preco->direto)}}</td>

                    </tr>
                    <tr>
                        <td>Preço de venda ifood</td>
                        <td class="font-weight-bold">{{real($produto->preco->online)}}</td>
                    </tr>
                    <tr>
                        <td>Custo insumpos</td>
                        <td class="font-weight-bold">{{real($produto->custo->valor)}}</td>
                    </tr>
                    <tr>
                        <td>Custo variaveis</td>
                        <td class="font-weight-bold">{{real($produto->custo->valor * 0.1)}}</td>
                    </tr>
                    <tr>
                        <td>Custo Cartao</td>
                        <td class="font-weight-bold">{{real($produto->taxa['direto'])}}</td>
                    </tr>
                    <tr>
                        <td>Custo ifood</td>
                        <td class="font-weight-bold">{{real($produto->taxa['online'])}}</td>
                    </tr>
                    <tr>
                        <td>Lucro de venda</td>
                        <td class="font-weight-bold">{{real(($produto->preco->direto - $produto->custo->valor) - $produto->taxa['direto'])}}</td>
                    </tr>
                    <tr>
                        <td>Lucro de venda ifood</td>
                        <td class="font-weight-bold">{{real(($produto->preco->online - $produto->custo->valor) - $produto->taxa['online'])}}</td>
                    </tr>
            </tbody>
        </table>
</div>

      <a href="{{route('prd.conf', $produto->id)}}" class="btn btn-primary btn-block"><b>Confi</b></a>
    </div>
    <!-- /.card-body -->
  </div>
</div>
