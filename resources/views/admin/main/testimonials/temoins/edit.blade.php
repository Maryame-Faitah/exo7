@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modifier</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('temoins.update',$temoin->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control mb-2" value="{{$temoin->nom}}">
                            @error('nom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control mb-2" value="{{$temoin->prenom}}">
                            @error('prenom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fonction">Fonction</label>
                            <input type="text" name="fonction" id="fonction" class="form-control mb-2" value="{{$temoin->fonction}}">
                            @error('fonction')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="img">Photo</label>
                            <input type="file" name="img" id="img" class="form-control mb-2" value="{{$temoin->img}}">
                            <img src="{{asset('storage/'.$temoin->img)}}" alt="">
                            @error('img')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="temoignage">Témoignage</label>
                            <textarea name="temoignage" id="temoignage" cols="30" rows="10" class="form-control mb-2"></textarea>
                            @error('temoignage')
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