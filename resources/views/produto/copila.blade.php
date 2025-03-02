@extends('adminlte::page')

@section('title', ' ')

@section('content_header')
    <h1>Produto - Copilar saidas </h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-6">
            <livewire:prd.LwCopila filtro='{{ucfirst(Request::segment(3))}}' />
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
