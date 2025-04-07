<div>
    <div class="card card-primary card-outline">
         
        <div class="table-responsive p-0">
            <table id="produto" class="table table-sm table-hover text-nowrap table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th rowspan="2">Produto</th>
                        @for ($ano = 2021; $ano <= 2025; $ano++)
                                <th colspan="12">{{$ano}}</th>    
                        @endfor
                         
                         
                    </tr>
                    <tr class="text-center">
                        @for ($ano = 2021; $ano <= 2025; $ano++)
                                
                            @for ($mes = 1; $mes <= 12; $mes++)
                                
                            <th scope="col">{{str_pad($mes, 2, '0', STR_PAD_LEFT)}}</th>
                            @endfor
                            
                        @endfor
                     
                </thead>
                <tbody>
                    @foreach($produtos as $key => $produto)
                        <tr>
                             
                           
                            <td>{{$key}}</td>
                            @foreach($produto as $pr)
                            
                            <td>{!! top($val, $pr->geral) !!}
                                @php
                                    $val = $pr->geral;
                                @endphp
                            </td>
                            @endforeach

                             
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
