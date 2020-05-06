@extends('adminlte::page')

@section('content')
    <h1 class="text-center">Dashboard Admin</h1>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  {{-- <h3>{{count($services2)}}</h3> --}}
  
                  <p>Services</p>
                </div>
                <div class="icon">
                  <i class="fas fa-hands-helping"></i>
                </div>
                {{-- <a href="{{route('services1.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
              </div>
        </div>
            <!-- ./col -->
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  {{-- <h3>{{count($portfolios)}}</h3> --}}
  
                  <p>Portfolios</p>
                </div>
                <div class="icon">
                  <i class="fas fa-briefcase"></i>
                </div>
                {{-- <a href="{{route('portfolio.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
              </div>
        </div>
            <!-- ./col -->
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  {{-- <h3>{{count($teams2)}}</h3> --}}
  
                  <p>Team Members</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                {{-- <a href="{{route('team1.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
              </div>
        </div>
            <!-- ./col -->
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{count($messages)}}</h3>
                  <p>Inbox</p>
                </div>
                <div class="icon">
                  <i class="fas fa-inbox"></i>
                </div>
                <a href="{{route('message.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
        </div>
            <!-- ./col -->
      </div>
    </div>
    
@endsection