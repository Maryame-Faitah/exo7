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
                            <label for="categorie">Catégorie </label>
                            <input type="text" name="categorie" id="categorie" class="form-control mb-2"
                            value="{{$categorie->categorie}}">
                            @error('categorie')
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