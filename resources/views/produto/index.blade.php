@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
<div class="row">

</div>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <livewire:prd.LwProdutoList filtro='{{$tipo}}'/>
    </div>



</div>

@stop


 
