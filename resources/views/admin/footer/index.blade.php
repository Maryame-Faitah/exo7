@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center">Section Footer</h1>
        @if (count($footers) == 0)
            <a href="{{route('footer.create')}}" class="btn btn-primary mb-2">Créer</a>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($footers as $footer)
                                <tr>
                                    <td>
                                        {{$footer->description}}
                                    </td>
                                    <td>
                                        <a href="{{route('footer.edit',$footer->id)}}" class="btn btn-primary">Modifier</a>
                                        <form action="{{route('footer.destroy',$footer->id)}}" method="POST">
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