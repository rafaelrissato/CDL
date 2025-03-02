@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
    <h1>Produto - {{$produto->name}} </h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
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

  </script>
@stop
