@extends('layout.app')

@section('content')
    @include('index-main')
    @include('index-services')
    @include('index-blog')
    {{-- @include('index-blog-post') --}}
    @include('index-contact')
@endsection