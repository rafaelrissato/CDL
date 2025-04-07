@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
    <h1>Produto - Categoria </h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-8">
            <livewire:prd.LwCategoriaList />
        </div>
        <div class="col-4">
            <livewire:prd.LwCategoriaCreate />
        </div>
    </div>

 

</div>

@stop


