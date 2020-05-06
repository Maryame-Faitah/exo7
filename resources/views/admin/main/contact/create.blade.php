@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" class="form-control mb-2">
                            {{-- @error('titre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control mb-2">
                            {{-- @error('description')
                                <span class="text-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                        <div class="form-group">
                            <label for="sous_titre">Sous-titre</label>
                            <input type="text" name="sous_titre" id="sous_titre" class="form-control mb-2">
                            @error('sous_titre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" name="adresse" id="adresse" class="form-control mb-2">
                            @error('adresse')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telephone">Téléphone</label>
                            <input type="text" name="telephone" id="telephone" class="form-control mb-2">
                            @error('telephone')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" class="form-control mb-2">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Bouton</label>
                            <input type="text" name="nom_btn" id="nom_btn" class="form-control mb-2">
                            @error('nom_btn')
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