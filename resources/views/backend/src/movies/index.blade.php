@extends('backend.layouts.app')

@section('content')
    @include('backend.src.movies.parts.create_new')
    @include('backend.src.movies.parts.table',['movies'=>$movies])
    @include('backend.src.movies.parts.table',['movies'=>$disabledMovies])
@endsection
