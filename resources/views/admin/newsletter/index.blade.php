@extends('adminlte::page')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Newsletter</h1>
        <div class="container">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                        <h3 class="card-title">Mails</h3>
                  </div>
                  <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach ($newsletters as $newsletter)
                                        <tr>
                                            <td class="mailbox-date">{{$newsletter->email}}</td>
                                            <td>
                                                <form action="{{route('newsletter.destroy',$newsletter->id)}}" method="POST">
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
    {{$newsletters->links()}}
@endsection