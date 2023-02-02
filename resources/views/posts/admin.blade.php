@extends('base')

@section('content')

@include('incs.flash')   
<a href='{{route('posts.create')}}' class="btn btn-primary">Add a Post</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Creation date</th>
        <th scope="col">Category</th>
        <th scope="col">Act</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{
            //date('d-m-Y',strtotime($post->created_at))
            $post->dateFormat();
        }}</td>
        <td>{{$post->category->label ?? "aucune catégorie"}}</td>
        <td class="d-flex">
            <a href="{{route('posts.edit',$post->id)}}"class="btn btn-warning">Editer</a>
            <form action="{{route('posts.destroy',$post->id)}}" method="post">
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection