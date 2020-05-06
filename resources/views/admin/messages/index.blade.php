@extends('adminlte::page')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Messages</h1>
        <div class="container">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                        <h3 class="card-title">Inbox</h3>
                  </div>
                  <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach ($messages as $message)
                                        <tr>
                                            <td class="mailbox-name">{{$message->nom}}</td>
                                            <td class="mailbox-date"><a href="{{route('message.show',$message->id)}}">{{$message->email}}</a></td>
                                            <td class="mailbox-subject">{{$message->sujet}}</td>
                                            <td class="mailbox-attachment">{{$message->message}}</td>
                                            <td>
                                                <form action="{{route('message.destroy',$message->id)}}" method="POST">
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
        </div>
    </div>
@endsection