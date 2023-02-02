@extends('base')

@section('content')
    mon backoffice
    <a href="{{route('posts.admin')}}"> Liste des articles</a>
    <a href="{{route('users.index')}}"> Liste des users </a>
@endsection