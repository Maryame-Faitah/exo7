@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Services primés</h1>
        @if (count($features) == 0)
            <a href="{{route('features.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card mt-2 mb-5">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Bouton</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($features as $feature)
                                <tr>
                                    <td>{{$feature->titre}}</td>
                                    <td>{{$feature->nom_btn}}</td>
                                    <td>
                                        <a href="{{route('features.edit',$feature->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('features.destroy',$feature->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger mr-2 mt-2">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection