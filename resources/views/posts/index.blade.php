@extends('base')

@section('content')
<div class="container">
<div class="jumbotron">
    <h1 class="display-3 text-center">Articles</h1>
    <div class="articles row justify-content-center">
    @foreach ($posts as $post)
        <div class="col-md-6">
            <div class="card-my-3">
                <h3 class="card-title">
                    title : {{$post->title;}}
                </h3>
                <p class="card-text">
                    {{$post->subtitle;}}
                </p>
                <!-- Méthode 1: Route->Controller-> 
                <a href="posts/{{$post->id}}" class="btn btn-primary">Read more</a>
                -->
                <!-- Méthode 2: Route->Name -->
                <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
    @endforeach
    </div>
</div>
</div>
@endsection