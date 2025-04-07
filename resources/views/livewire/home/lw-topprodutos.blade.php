<div>
    <div class="col-12 col-sm-5">
        <div class="card card-primary card-outline card-outline-tabs">
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
                        <td>{!!$top->produto->topmes.' '.$loop->index + 1 !!}</td>
                        <td>{!! $top->produto->link !!}</td>
                        <td>{{$top->quantidade}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
          <!-- /.card -->
        </div>
      </div>
</div>
