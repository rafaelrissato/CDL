@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
    <h1> Dashboard</h1>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-6">
                    <livewire:ped.LwCopila filtro='{{ucfirst(Request::segment(3))}}' />
                </div>

            </div>
        </div>

    </div>



</div>

@stop


