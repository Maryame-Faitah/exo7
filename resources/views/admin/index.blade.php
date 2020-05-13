@extends('adminlte::page')

@section('content')
    <h1 class="text-center">Dashboard Admin</h1>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{count($serviceslists)}}</h3>
  
                  <p>Services</p>
                </div>
                <div class="icon">
                  <i class="fas fa-hands-helping"></i>
                </div>
                <a href="{{route('servicescard.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
        </div>
            <!-- ./col -->
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{count($posts)}}</h3>
  
                  <p>Blog</p>
                </div>
                <div class="icon">
                  <i class="fas fa-briefcase"></i>
                </div>
                <a href="{{route('post.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
        </div>
            <!-- ./col -->
        <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 class="text-light">{{count($membres)}}</h3>
  
                  <p class="text-light">Team Members</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
                <a href="{{route('team.index')}}" class="small-box-footer text-light">
                  <p class="text-light my-0">More info <i class="fas fa-arrow-circle-right"></i></p>
                </a>
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