@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Team</h1>
        @if (count($teams) == 0)
            <a href="{{route('team.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card mt-2 mb-5">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teams as $team)
                                <tr>
                                    <td>{{$team->titre}}</td>
                                    <td>
                                        <a href="{{route('team.edit',$team->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('team.destroy',$team->id)}}" method="POST">
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

        <a href="{{route('membres.create')}}" class="btn btn-primary mb-2">Créer</a>
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Fonction</th>
                                <th>Position</th>
                                <th>Photo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($membres as $membre)
                                <tr>
                                    <td>
                                        {{$membre->nom}}
                                    </td>
                                    <td>
                                        {{$membre->prenom}}
                                    </td>
                                    <td>
                                        {{$membre->fonction}}
                                    </td>
                                    <td>
                                        {{$membre->position}}
                                    </td>
                                    <td>
                                        <img src="{{asset('storage/'.$membre->img)}}" alt="" class="w-25">
                                    </td>
                                    <td>
                                        <a href="{{route('membres.edit',$membre->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('membres.destroy',$membre->id)}}" method="POST">
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