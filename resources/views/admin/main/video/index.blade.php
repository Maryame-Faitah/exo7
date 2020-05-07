@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Vidéo</h1>
        @if (count($videos) == 0)
            <a href="{{route('video.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Lien</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                                <tr>
                                    <td>
                                        {{$video->lien}}
                                    </td>
                                    <td>
                                        <a href="{{route('video.edit',$video->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('video.destroy',$video->id)}}" method="POST">
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