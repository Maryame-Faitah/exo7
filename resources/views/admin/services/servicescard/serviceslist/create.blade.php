@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('serviceslist.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" class="form-control mb-2">
                            @error('titre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nom">Icône</label>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-037-idea">
                                <i class="flaticon-037-idea"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-011-compass">
                                <i class="flaticon-011-compass"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-023-flask">
                                <i class="flaticon-023-flask"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-039-vector">
                                <i class="flaticon-039-vector"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-036-brainstorming">
                                <i class="flaticon-036-brainstorming"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-026-search">
                                <i class="flaticon-026-search"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-018-laptop-1">
                                <i class="flaticon-018-laptop-1"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-043-sketch">
                                <i class="flaticon-043-sketch"></i>
                            </div>
                            <div>
                                <input type="radio" name="icon" id="icon" value="flaticon-012-cube">
                                <i class="flaticon-012-cube"></i>
                            </div>
                            @error('icon')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control mb-2"></textarea>
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