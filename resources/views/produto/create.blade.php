@extends('adminlte::page')

@section('title', ' ')

@section('content_header')
    <h1>Produto - Novo </h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-6">
            <livewire:prd.LwProdutoCreate filtro='{{ucfirst(Request::segment(3))}}' />
        </div>

    </div>



</div>

@stop


