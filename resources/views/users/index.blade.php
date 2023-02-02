@extends('base')

@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="{{route('posts.edit',$user->id)}}"class="btn btn-primary">Editer</a>
            <a href="{{route('posts.destroy',$user->id)}}" class="btn btn-danger">Supprimer</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection