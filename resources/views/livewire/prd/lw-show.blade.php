<div class="card card-primary card-outline">
    <div class="card-body box-profile">


      <h3 class="profile-username text-center">{{$produto->name}}</h3>

      <p class="text-muted text-center">{{$produto->categoria->name}}</p>
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
                        <td class="font-weight-bold">{{real($produto->taxa['ifood'])}}</td>
                    </tr>
                    <tr>
                        <td>Custo ifood</td>
                        <td class="font-weight-bold">{{real($produto->taxa['direto'])}}</td>
                    </tr>
                    <tr>
                        <td>Lucro de venda</td>
                        <td class="font-weight-bold">{{real(($produto->preco->direto - $produto->custo->valor) - $produto->taxa['direto'])}}</td>
                    </tr>
                    <tr>
                        <td>Lucro de venda ifood</td>
                        <td class="font-weight-bold">{{real(($produto->preco->online - $produto->custo->valor) - $produto->taxa['ifood'])}}</td>
                    </tr>
            </tbody>
        </table>
</div>

      <a href="{{route('prd.conf', $produto->id)}}" class="btn btn-primary btn-block"><b>Confi</b></a>
    </div>
    <!-- /.card-body -->
  </div>
