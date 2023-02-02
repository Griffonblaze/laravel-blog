@extends('base')

@section('content')
    formulaire de modif post
    <form action="{{route('posts.update',$postView->id)}}"method="post">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="form-group">
                <label for="title">Titre:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="titre de l'article" value="{{$postView->title}}">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" id="id" class="form-control" value="{{$postView->id}}">
            </div>
            <div class="form-group">
                <label for="subtitle">Sous-Titre:</label>
                <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Résumé de l'article" value="{{$postView->subtitle}}">
            </div>
            <div class=>
                <label for="content">Contenu:</label>
                <textarea name="content" id="content" placeholder="Contenu de l'article" class="form-control">{{$postView->title}}"</textarea>
            </div>
            <div>
                <p>Chosen category : {{$postView->category->label}}</p>
                <label for="category_id">Category:</label>
                <select name="category_id" id='category_id'>
                    <option value="{{null}}">Choose a Category</option>
                    <option value="{{$postView->category->id}}" selected>{{$postView->category->label}}</option>
                    @foreach ($categories as $category)
                        @if ($category->id != $postView->category->id)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                        @endif   
                    @endforeach
                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </div>



    </form>

@endsection