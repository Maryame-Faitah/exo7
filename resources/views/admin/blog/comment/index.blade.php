@extends('adminlte::page')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Commentaires</h1>
        <div class="container">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                        <h3 class="card-title">Comments</h3>
                  </div>
                  <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>E-mail</th>
                                        <th>Sujet</th>
                                        <th>Commentaire</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>
                                            <td class="mailbox-name">{{$comment->nom}}</td>
                                            <td class="mailbox-date">
                                                <a href="">
                                                    {{$comment->email}}
                                                </a>
                                            </td>
                                            <td class="mailbox-subject">{{$comment->sujet}}</td>
                                            <td class="mailbox-attachment">{{$comment->texte}}</td>
                                            {{-- <td>
                                                <form action="{{route('comment.destroy',$comment->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger mr-2 mt-2">Supprimer</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection