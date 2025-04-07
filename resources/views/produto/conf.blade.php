@extends('adminlte::page')

@section('title', ' ')

@section('content_header')
    <h1></h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-12">
            <div class="card">

                    <div class="card-header">
                    <h3 class="card-title">
                        <font style="vertical-align: inherit;"> {{$produto->name}}&nbsp;&nbsp;&nbsp;{!! status($produto->ativo) !!}</font>
                    </h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <div class="input-group-append">
                                        <a href="{{route('prd.show',$produto->id)}}" class="btn btn-default">
                                            <i class="fas fa-arrow-left"></i>
                                        </a>
                                         
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <livewire:prd.LwConf filtro='{{ucfirst(Request::segment(2))}}' />
        </div>

    </div>



</div>

@stop


@section('js')
<script>
    window.addEventListener('alert',function(e){
        const padrao = {
            toast: 'true',
            timer: 3000,
            showConfirmButton: false,
            position: 'top-right',
            timerProgressBar: true,
        };
        const config = {...padrao,...e.detail};
          Swal.fire(config);

      });

  </script>
@stop
