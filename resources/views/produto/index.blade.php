@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
    <h1>Produto - {{$tipo}} </h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <livewire:prd.LwProdutoList filtro='{{$tipo}}'/>
    </div>



</div>

@stop


