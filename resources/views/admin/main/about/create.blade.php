@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="titre">Titre</label>
                            <input type="text" name="titre" id="titre" class="form-control mb-2">
                            @error('titre')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="texte_gauche">Texte de gauche</label>
                            <textarea name="texte_gauche" id="texte_gauche" cols="10" rows="10"  class="form-control mb-2"></textarea>
                            @error('texte_gauche')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="texte_droite">Texte de droite</label>
                            <textarea name="texte_droite" id="texte_droite" cols="10" rows="10"  class="form-control mb-2"></textarea>
                            @error('texte_droite')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nom_btn">Bouton</label>
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