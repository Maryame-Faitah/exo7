@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Blog Posts</h1>
        {{-- Creation de categories --}}
        @if (count($categories) == 0)
            <a href="{{route('categorie.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Catégorie 1</th>
                                <th>Catégorie 2</th>
                                <th>Catégorie 3</th>
                                <th>Catégorie 4</th>
                                <th>Catégorie 5</th>
                                <th>Catégorie 6</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie)
                                <tr>
                                    <td>
                                        {{$categorie->categorie1}}
                                    </td>
                                    <td>
                                        {{$categorie->categorie2}}
                                    </td>
                                    <td>
                                        {{$categorie->categorie3}}
                                    </td>
                                    <td>
                                        {{$categorie->categorie4}}
                                    </td>
                                    <td>
                                        {{$categorie->categorie5}}
                                    </td>
                                    <td>
                                        {{$categorie->categorie6}}
                                    </td>
                                    <td>
                                        <a href="{{route('categorie.edit',$categorie->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('categorie.destroy',$categorie->id)}}" method="POST">
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
        {{-- Creation de tags --}}
        @if (count($tags) == 0)
            <a href="{{route('tag.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Tag 1</th>
                                <th>Tag 2</th>
                                <th>Tag 3</th>
                                <th>Tag 4</th>
                                <th>Tag 5</th>
                                <th>Tag 6</th>
                                <th>Tag 7</th>
                                <th>Tag 8</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>
                                        {{$tag->tag1}}
                                    </td>
                                    <td>
                                        {{$tag->tag2}}
                                    </td>
                                    <td>
                                        {{$tag->tag3}}
                                    </td>
                                    <td>
                                        {{$tag->tag4}}
                                    </td>
                                    <td>
                                        {{$tag->tag5}}
                                    </td>
                                    <td>
                                        {{$tag->tag6}}
                                    </td>
                                    <td>
                                        {{$tag->tag7}}
                                    </td>
                                    <td>
                                        {{$tag->tag8}}
                                    </td>
                                    <td>
                                        <a href="{{route('tag.edit',$tag->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('tag.destroy',$tag->id)}}" method="POST">
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
        {{-- Creation d'articles --}}
        <a href="{{route('post.create')}}" class="btn btn-primary mb-2">Créer</a>
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Texte</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        {{$post->titre}}
                                    </td>
                                    <td>
                                        {{$post->date}}
                                    </td>
                                    <td>
                                        <img src="{{asset('storage/'.$post->img)}}" alt="" class="w-25">
                                    </td>
                                    <td>
                                        {{$post->texte}}
                                    </td>
                                    <td>
                                        <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('post.destroy',$post->id)}}" method="POST">
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