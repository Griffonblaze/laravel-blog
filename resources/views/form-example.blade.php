@extends('base')
@section('content')

<form action="/posts" method="POST" class="form-example">
  @csrf
    <div class="form-example">
      <label for="name">Enter your name: </label>
      <input type="text" name="name" id="name" required>
    </div>
    @error('name')
    {{$message}} <!--correspond à php echo -->
    @enderror
    <div class="form-example">
      <label for="email">Enter your email: </label>
      <input type="email" name="email" id="email" required>
    </div>
    @error('email') <!--affiche un message d'erreur -->
    {{$message}} <!--correspond à php echo -->
    @enderror
    <div class="form-example">
      <input type="submit" value="Subscribe!">
    </div>
  </form>

@endsection