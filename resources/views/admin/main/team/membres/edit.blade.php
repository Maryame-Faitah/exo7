@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Modifier</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('membres.update',$membre->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control mb-2" value="{{$membre->nom}}">
                            @error('nom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control mb-2" value="{{$membre->prenom}}">
                            @error('prenom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fonction">Fonction</label>
                            <input type="text" name="fonction" id="fonction" class="form-control mb-2" value="{{$membre->fonction}}">
                            @error('fonction')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Position</label>
                            <div>
                                @if ($membre->position == "Center")
                                    <input type="radio" value="Center" name="position" id="position" checked>
                                    <p class="d-inline mr-5">Center</p>
                                @else
                                    <input type="radio" value="Center" name="position" id="position">
                                    <p class="d-inline mr-5">Center</p>
                                @endif
                            </div>
                            <div>
                                @if ($membre->position == "Side")
                                    <input type="radio" value="Side" name="position" id="position" checked>
                                    <p class="d-inline mr-5">Side</p>    
                                @else
                                    <input type="radio" value="Side" name="position" id="position">
                                    <p class="d-inline mr-5">Side</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img">Photo</label>
                            <input type="file" name="img" id="img" class="form-control mb-2" value="{{$membre->img}}">
                            <img src="{{asset('storage/'.$membre->img)}}" alt="">
                            @error('img')
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