@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Modifier</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('serviceslist.update',$serviceslist->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" class="form-control mb-2" value="{{$serviceslist->titre}}">
                            @error('titre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nom">Icône</label>
                            <div>
                                @if ($serviceslist->icon == "flaticon-037-idea")
                                    <input type="radio" name="icon" id="" value="flaticon-037-idea" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-037-idea">
                                @endif
                                <i class="flaticon-037-idea"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-011-compass")
                                <input type="radio" name="icon" id="" value="flaticon-011-compass" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-011-compass">
                                @endif
                                <i class="flaticon-011-compass"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-023-flask")
                                <input type="radio" name="icon" id="" value="flaticon-023-flask" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-023-flask">
                                @endif
                                <i class="flaticon-023-flask"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-039-vector")
                                <input type="radio" name="icon" id="" value="flaticon-039-vector" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-039-vector">
                                @endif
                                <i class="flaticon-039-vector"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-036-brainstorming")
                                <input type="radio" name="icon" id="" value="flaticon-036-brainstorming" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-036-brainstorming">
                                @endif
                                <i class="flaticon-036-brainstorming"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-026-search")
                                <input type="radio" name="icon" id="" value="flaticon-026-search" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-026-search">
                                @endif
                                <i class="flaticon-026-search"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-018-laptop-1")
                                <input type="radio" name="icon" id="" value="flaticon-018-laptop-1" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-018-laptop-1">
                                @endif
                                <i class="flaticon-018-laptop-1"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-043-sketch")
                                <input type="radio" name="icon" id="" value="flaticon-043-sketch" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-043-sketch">
                                @endif
                                <i class="flaticon-043-sketch"></i>
                            </div>
                            <div>
                                @if ($serviceslist->icon == "flaticon-012-cube")
                                <input type="radio" name="icon" id="" value="flaticon-012-cube" checked>
                                @else
                                    <input type="radio" name="icon" id="" value="flaticon-012-cube">
                                @endif
                                <i class="flaticon-012-cube"></i>
                            </div>
                            @error('icon')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-2">
                                {{$serviceslist->description}}
                            </textarea>
                            @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection