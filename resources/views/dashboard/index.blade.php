@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
    <h1> Dashboard</h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-12">
            <livewire:home.LwTopprodutos filtro='Smash burger' />
            <livewire:home.LwTopprodutos filtro='Acompanhamento' />
            <livewire:home.LwTopprodutos filtro='Refrigerante' />
        </div>
    </div>




</div>

@stop


