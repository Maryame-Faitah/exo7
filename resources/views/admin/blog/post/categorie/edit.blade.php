@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Modifier</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('categorie.update',$categorie->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="categorie1">Catégorie 1</label>
                            <input type="text" name="categorie1" id="categorie1" class="form-control mb-2"
                            value="{{$categorie->categorie1}}">
                            @error('categorie1')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categorie2">Catégorie 2</label>
                            <input type="text" name="categorie2" id="categorie2" class="form-control mb-2"
                            value="{{$categorie->categorie2}}">
                            @error('categorie2')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categorie3">Catégorie 3</label>
                            <input type="text" name="categorie3" id="categorie3" class="form-control mb-2"
                            value="{{$categorie->categorie3}}">
                            @error('categorie3')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categorie4">Catégorie 4</label>
                            <input type="text" name="categorie4" id="categorie4" class="form-control mb-2"
                            value="{{$categorie->categorie4}}">
                            @error('categorie4')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categorie5">Catégorie 5</label>
                            <input type="text" name="categorie5" id="categorie5" class="form-control mb-2"
                            value="{{$categorie->categorie5}}">
                            @error('categorie5')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categorie6">Catégorie 6</label>
                            <input type="text" name="categorie6" id="categorie6" class="form-control mb-2"
                            value="{{$categorie->categorie6}}">
                            @error('categorie6')
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