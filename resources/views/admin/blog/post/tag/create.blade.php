@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('tag.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tag1">Tag 1</label>
                            <input type="text" name="tag1" id="tag1" class="form-control mb-2">
                            @error('tag1')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag2">Tag 2</label>
                            <input type="text" name="tag2" id="tag2" class="form-control mb-2">
                            @error('tag2')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag3">Tag 3</label>
                            <input type="text" name="tag3" id="tag3" class="form-control mb-2">
                            @error('tag3')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag4">Tag 4</label>
                            <input type="text" name="tag4" id="tag4" class="form-control mb-2">
                            @error('tag4')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag5">Tag 5</label>
                            <input type="text" name="tag5" id="tag5" class="form-control mb-2">
                            @error('tag5')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag6">Tag 6</label>
                            <input type="text" name="tag6" id="tag6" class="form-control mb-2">
                            @error('tag6')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag7">Tag 7</label>
                            <input type="text" name="tag7" id="tag7" class="form-control mb-2">
                            @error('tag7')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag8">Tag 8</label>
                            <input type="text" name="tag8" id="tag8" class="form-control mb-2">
                            @error('tag8')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection