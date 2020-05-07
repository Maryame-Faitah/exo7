@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Menu</h1>
        @if (count($menus) == 0)
            <a href="{{route('menu.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Section 1</th>
                                <th>Section 2</th>
                                <th>Section 3</th>
                                <th>Section 4</th>
                                <th>Logo</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $menu)
                                <tr>
                                    <td>
                                        {{$menu->section1}}
                                    </td>
                                    <td>
                                        {{$menu->section2}}
                                    </td>
                                    <td>
                                        {{$menu->section3}}
                                    </td>
                                    <td>
                                        {{$menu->section4}}
                                    </td>
                                    <td>
                                        <img src="{{asset('storage/'.$menu->img)}}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('menu.edit',$menu->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('menu.destroy',$menu->id)}}" method="POST">
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