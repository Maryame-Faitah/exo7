@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Ready?</h1>
        @if (count($readys) == 0)
            <a href="{{route('ready.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Bouton</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($readys as $ready)
                                <tr>
                                    <td>
                                        {{$ready->titre}}
                                    </td>
                                    <td>
                                        {{$ready->description}}
                                    </td>
                                    <td>
                                        {{$ready->nom_btn}}
                                    </td>
                                    <td>
                                        <a href="{{route('ready.edit',$ready->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('ready.destroy',$ready->id)}}" method="POST">
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