@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Témoignages</h1>
        @if (count($testimonials) == 0)
            <a href="{{route('testimonials.create')}}" class="btn btn-primary mb-2">Créer</a>
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
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{$testimonial->titre}}</td>
                                    <td>
                                        <a href="{{route('testimonials.edit',$testimonial->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('testimonials.destroy',$testimonial->id)}}" method="POST">
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

        <a href="{{route('temoins.create')}}" class="btn btn-primary mb-2">Créer</a>
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Fonction</th>
                                <th>Photo</th>
                                <th>Témoignage</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($temoins as $temoin)
                                <tr>
                                    <td>
                                        {{$temoin->nom}}
                                    </td>
                                    <td>
                                        {{$temoin->prenom}}
                                    </td>
                                    <td>
                                        {{$temoin->fonction}}
                                    </td>
                                    <td>
                                        <img src="{{asset('storage/'.$temoin->img)}}" alt="" class="w-25">
                                    </td>
                                    <td>
                                        {{$temoin->temoignage}}
                                    </td>
                                    <td>
                                        <a href="{{route('temoins.edit',$temoin->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('temoins.destroy',$temoin->id)}}" method="POST">
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