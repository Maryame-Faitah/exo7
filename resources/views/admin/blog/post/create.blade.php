@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" class="form-control mb-2">
                            @error('titre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control mb-2">
                            @error('date')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categorie_id">Catégories</label>
                            <select name="categorie_id" aria-controls="example1" class="form-control input-sm">
                                @foreach ($categories as $categorie)
                                    <option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img" class="form-control mb-2 w-50">
                            @error('img')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="texte">Article</label>
                            <textarea name="texte" id="texte" cols="30" rows="10" class="form-control mb-2"></textarea>
                            @error('texte')
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