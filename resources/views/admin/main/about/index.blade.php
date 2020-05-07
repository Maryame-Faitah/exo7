@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Présentation</h1>
        @if (count($abouts) == 0)
            <a href="{{route('about.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Texte de gauche</th>
                                <th>Texte de droite</th>
                                <th>Bouton</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($abouts as $about)
                                <tr>
                                    <td>
                                        {{$about->titre}}
                                    </td>
                                    <td>
                                        {{$about->texte_gauche}}
                                    </td>
                                    <td>
                                        {{$about->texte_droite}}
                                    </td>
                                    <td>
                                        {{$about->nom_btn}}
                                    </td>
                                    <td>
                                        <a href="{{route('about.edit',$about->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('about.destroy',$about->id)}}" method="POST">
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