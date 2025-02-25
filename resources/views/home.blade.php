@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 400 400"><path fill="#c8aa6e" d="M317.647,200l-35.294-47.059h23.53c41.584,0,94.117-47.058,94.117-47.058H270.588l-35.294,35.293,23.53,82.354ZM245.026,35.3H153.673l-12.5,23.523L200,129.412l58.823-70.588L245.026,35.3m-33.262,117.64L200,164.706l-11.765-11.765L152.941,329.412,200,364.706l47.059-35.294ZM82.353,200l35.294-47.059H94.118C52.533,152.941,0,105.883,0,105.883H129.412l35.294,35.293-23.53,82.354Z" fill-rule="evenodd"></path></svg>

<div class="row">

    <div class="col">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-info">
            <h3 class="">
                tinowns</h3>
          </div>
          <div class="widget-user-image">
            <img class="img-circle elevation-2" src="https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/73/LOUD_tinowns_LTA_2025_Split_1.png" alt="User Avatar">
          </div>
          <div class="card-footer">
           <div class="col-sm-6">

                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="48" height="40" viewBox="0 0 400 400"><path fill="#c8aa6e" d="M317.647,200l-35.294-47.059h23.53c41.584,0,94.117-47.058,94.117-47.058H270.588l-35.294,35.293,23.53,82.354ZM245.026,35.3H153.673l-12.5,23.523L200,129.412l58.823-70.588L245.026,35.3m-33.262,117.64L200,164.706l-11.765-11.765L152.941,329.412,200,364.706l47.059-35.294ZM82.353,200l35.294-47.059H94.118C52.533,152.941,0,105.883,0,105.883H129.412l35.294,35.293-23.53,82.354Z" fill-rule="evenodd"></path></svg>



                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <div class="description-block">

                    <img   src="https://am-a.akamaihd.net/image?resize=40:&f=http%3A%2F%2Fstatic.lolesports.com%2Fteams%2FLogo-LOUD-Esports_Original.png" alt="User Avatar">
                </div>
                <!-- /.description-block -->
              </div>
            <div class="col-sm-12 text-center">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            </div>
            <div class="row">

              <div class="col-sm-6 border-right">
                <div class="description-block">
                    <span class="description-text">Media</span>
                  <h5 class="description-header">80</h5>

                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <div class="description-block">
                    <span class="description-text">Semana</span>
                  <h5 class="description-header">90,000</h5>

                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->

              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>

              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
      <div class="col">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-info">
            <h3 class="widget-user-username">Alexander Pierce</h3>
            <h5 class="widget-user-desc">Founder &amp; CEO</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle elevation-2" src="https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/73/LOUD_tinowns_LTA_2025_Split_1.png" alt="User Avatar">
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">3,200</h5>
                  <span class="description-text">SALES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">13,000</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">35</h5>
                  <span class="description-text">PRODUCTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <div class="col">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-info">
            <h3 class="widget-user-username">Alexander Pierce</h3>
            <h5 class="widget-user-desc">Founder &amp; CEO</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle elevation-2" src="https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/73/LOUD_tinowns_LTA_2025_Split_1.png" alt="User Avatar">
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">3,200</h5>
                  <span class="description-text">SALES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">13,000</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">35</h5>
                  <span class="description-text">PRODUCTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>
      <div class="col">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-info">
            <h3 class="widget-user-username">Alexander Pierce</h3>
            <h5 class="widget-user-desc">Founder &amp; CEO</h5>
          </div>
          <div class="widget-user-image">
            <img class="img-circle elevation-2" src="https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/7/73/LOUD_tinowns_LTA_2025_Split_1.png" alt="User Avatar">
          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">3,200</h5>
                  <span class="description-text">SALES</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4 border-right">
                <div class="description-block">
                  <h5 class="description-header">13,000</h5>
                  <span class="description-text">FOLLOWERS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
              <div class="col-sm-4">
                <div class="description-block">
                  <h5 class="description-header">35</h5>
                  <span class="description-text">PRODUCTS</span>
                </div>
                <!-- /.description-block -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
        <!-- /.widget-user -->
      </div>

</div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
