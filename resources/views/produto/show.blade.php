@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
<div class="row">

</div>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-12">
            <div class="card">

                    <div class="card-header">
                    <h3 class="card-title">
                        <font style="vertical-align: inherit;"> {{$produto->name}}</font>
                    </h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <a href="{{route('prd.home',$produto->categoria->tipo)}}" class="btn btn-default">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                        <a href="{{route('prd.conf', $produto->id)}}" class="btn btn-default">
                                            <i class="fa-solid fa-gears"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <livewire:prd.LwGrafico filtro='{{$produto->id}}' />
        </div>
        <div class="col-12 col-lg-4">
            <livewire:prd.LwShow filtro='{{$produto->id}}' />

        </div>
        <div class="col-12 col-lg-8">
            @if ($produto->composicaofilho->count() != 0)
            <livewire:prd.LwPaiList filtro='{{$produto->id}}' />
            @endif
            @if ($produto->categoria->calculo == 2)
            <livewire:prd.LwFichaList filtro='{{$produto->id}}'/>
            @endif
            @if ($produto->categoria->calculo == 3)
            <livewire:prd.LwFichaList filtro='{{$produto->id}}' />
            @endif
            <livewire:prd.LwCustoList filtro='{{$produto->id}}' />
            <livewire:prd.LwSaidas filtro='{{$produto->id}}' />


        </div>
    </div>



</div>

@stop


@section('js')
@livewireChartsScripts
<script>
    window.addEventListener('pergunta',function(e){
        const padrao = {

            showConfirmButton: true,
            onConfirmed: 'Confirmed',
            showDenyButton: false,
            onDenied: 'cancelled',
            showCancelButton: true,
            onDismissed: 'cancelled',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Deletar',
            data: e.detail,
        };
        const config = {...padrao,...e.detail};
          Swal.fire(config);

      });
      $(".dial").knob({
    'readOnly':true,
    'thickness': '0.2',
    "skin":"tron",

});
  </script>
@stop
