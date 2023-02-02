@extends('base')

@section('content')
    
    <div class="jumbotron">
        <h2 class="display-3 text-center">{{$postView->title}}</h2>
        <hr>
        <div class="d-flex justify-content-center"></div>
            <p>
                {{$postView->subtitle}}
            </p>
            <hr>
            <p>
                {{$postView->content}}
            </p>
        </div>
    </div>
    <div class="text-center">
        <a href="{{route('posts.index')}}" class=" btn btn-primary">
            <i class="fa fa-arrow-left"></i>
        </a>
    </div>
@endsection