@extends('adminlte::page')

@section('title', 'Organizaçoes')

@section('content_header')
<div class="row">

</div>
@stop

@section('content')

<div class="container-fluid">



    <div class="row">
        <div class="col-12">
            <livewire:ped.LwHome   />
        </div>

    </div>



</div>

@stop


@section('js')

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
@stop
