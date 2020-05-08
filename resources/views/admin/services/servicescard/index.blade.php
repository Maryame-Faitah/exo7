@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center">Section Services</h1>
        @if (count($services) == 0)
            <a href="{{route('servicescard.create')}}" class="btn btn-primary mb-2">Créer</a>
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
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{$service->titre}}</td>
                                    <td>
                                        <a href="{{route('servicescard.edit',$service->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('servicescard.destroy',$service->id)}}" method="POST">
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

        <a href="{{route('serviceslist.create')}}" class="btn btn-primary mb-2">Créer</a>
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Icône</th>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($serviceslists as $serviceslist)
                                <tr>
                                    <td>
                                        {{$serviceslist->titre}}
                                    </td>
                                    <td>
                                        <i class="{{$serviceslist->icon}}"></i>
                                    </td>
                                    <td>
                                        {{$serviceslist->description}}
                                    </td>
                                    <td>
                                        <a href="{{route('serviceslist.edit',$serviceslist->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('serviceslist.destroy',$serviceslist->id)}}" method="POST">
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