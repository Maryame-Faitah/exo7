@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Créer</h1>
        <div class="col mt-5">
            <div class="card card-warning">
                <div class="card-body">
                    <form role="form" action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="section1">Section 1</label>
                            <input type="text" name="section1" id="section1" class="form-control mb-2">
                            @error('section1')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="section2">Section 2</label>
                            <input type="text" name="section2" id="section2" class="form-control mb-2">
                            @error('section2')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="section3">Section 3</label>
                            <input type="text" name="section3" id="section3" class="form-control mb-2">
                            @error('section3')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="section4">Section 4</label>
                            <input type="text" name="section4" id="section4" class="form-control mb-2">
                            @error('section4')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="img">Logo</label>
                            <input type="file" name="img" id="img" class="form-control mb-2">
                            @error('img')
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