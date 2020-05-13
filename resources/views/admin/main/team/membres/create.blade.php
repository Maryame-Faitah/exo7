@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('membres.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control mb-2">
                            @error('nom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control mb-2">
                            @error('prenom')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="fonction">Fonction</label>
                            <input type="text" name="fonction" id="fonction" class="form-control mb-2">
                            @error('fonction')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Position</label>
                            <div>
                                <input type="radio" value="Center" name="position" id="position">
                                <p class="d-inline mr-5">Center</p>
                            </div>
                            <div>
                                <input type="radio" value="Side" name="position" id="position">
                                <p class="d-inline mr-5">Side</p>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="fonction">Fonction</label>
                            <div>
                                <input type="radio" id="fonction" name="fonction" value="center">
                                <label for="fonction">CEO</label>
                              </div>
                              <div>
                                <input type="radio" id="fonction" name="fonction" value="side">
                                <label for="fonction">Autres:</label>
                                <input type="text" id="fonction" name="fonction">
                              </div>
                                @error('fonction')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="img">Photo</label>
                            <input type="file" name="img" id="img" class="form-control mb-2 w-50">
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