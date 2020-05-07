@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Hero</h1>
        @if (count($slogans) == 0)
            <a href="{{route('slogan.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card mt-2 mb-5">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Slogan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slogans as $slogan)
                                <tr>
                                    <td>{{$slogan->titre}}</td>
                                    <td>
                                        <a href="{{route('slogan.edit',$slogan->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('slogan.destroy',$slogan->id)}}" method="POST">
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
        @if (count($heros) < 6)
            <a href="{{route('hero.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($heros as $hero)
                                <tr>
                                    <td>
                                        <img src="{{asset('storage/'.$hero->img)}}" alt="" class="w-25">
                                    </td>
                                    <td>
                                        <a href="{{route('hero.edit',$hero->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('hero.destroy',$hero->id)}}" method="POST">
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