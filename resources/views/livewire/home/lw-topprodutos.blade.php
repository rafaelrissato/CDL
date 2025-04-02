<div>
    <div class="col-12 col-sm-5">
        <div class="card card-primary card-outline card-outline-tabs">
          <div class="card-header">
            <h3 class="card-title font-style: vertical-align: inherit;">Top {{$filtro}} de {{$data->addMonths('2')->format('m-Y')}}</font>
            </h3>

        </div>
          <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="mes-tab" data-toggle="pill" href="#mes{{ $filtro }}" role="tab" aria-selected="true">Mes atual</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="passado-tab" data-toggle="pill" href="#passado{{ $filtro }}" role="tab"  aria-selected="false">Mes passado</a>
              </li>

            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
              <div class="tab-pane fade active show" id="mes{{ $filtro }}" role="tabpanel">
                <div class="card-body table-responsive p-0">
                    <table id="produto" class="table table-sm table-hover text-nowrap">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Produto</th>
                                <th>Qnt.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($topmes->count() == 0)
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            @else
                                @foreach ($topmes as $key =>$top)
                                <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{!! $top->produto->link !!}</td>
                                <td>{{$top->quantidade}}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
              </div>
              <div class="tab-pane fade p-0" id="passado{{ $filtro }}" role="tabpanel">
                <div class="card-body table-responsive p-0">
                    <table id="produto" class="table table-sm table-hover text-nowrap p-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Produto</th>
                                <th>Qnt.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($toppassado->count() == 0)
                            <tr>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            @else
                                @foreach ($toppassado as $key =>$top)
                                <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{!! $top->produto->link !!}</td>
                                <td>{{$top->quantidade}}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
              </div>


            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>
