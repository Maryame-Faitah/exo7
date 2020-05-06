@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Contact</h1>
        @if (count($contacts) == 0)
            <a href="{{route('contact.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row">
            <div class="">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Sous-titre</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>E-mail</th>
                                <th>Bouton</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>
                                        {{$contact->titre}}
                                    </td>
                                    <td>
                                        {{$contact->description}}
                                    </td>
                                    <td>
                                        {{$contact->sous_titre}}
                                    </td>
                                    <td>
                                        {{$contact->adresse}}
                                    </td>
                                    <td>
                                        {{$contact->telephone}}
                                    </td>
                                    <td>
                                        {{$contact->email}}
                                    </td>
                                    <td>
                                        {{$contact->nom_btn}}
                                    </td>
                                    <td>
                                        <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('contact.destroy',$contact->id)}}" method="POST">
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