@extends('base')

@section('content')
    formulaire de création post
    <form action="{{route('posts.store')}}"method="post">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="title">Titre:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="titre de l'article">
            </div>
            <div class="form-group">
                <label for="subtitle">Sous-Titre:</label>
                <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="Résumé de l'article">
            </div>
            <div class=>
                <label for="content">Contenu:</label>
                <textarea name="content" id="content" placeholder="Contenu de l'article" class="form-control"></textarea>
            </div>
            <div>
                <label for="category_id">Category:</label>
                <select name="category_id" id='category_id'>
                    <option value="{{null}}">Choose a Category</option>
                    @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                    @endforeach
                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </div>



    </form>

@endsection