@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
<div class="row">
    <div class="col-12">
        <div class="card">

                <div class="card-header">
                <h3 class="card-title">
                    <font style="vertical-align: inherit;"> Topo produtos vendidos</font>
                </h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm">
                                <div class="input-group-append">
                                    <a href=" " class="btn btn-default">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                    <a href="{{ route('prd.top.copila') }}" class="btn btn-default">
                                        <i class="fa-solid fa-gears"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

<div class="container-fluid">


    <div class="row">
        <div class="row">
            <div class="col-12">
                <livewire:prd.top.LwTop />
            </div>
        </div>
    </div>



</div>

@stop


