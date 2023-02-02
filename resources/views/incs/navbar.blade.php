<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('posts.index')}}">Articles</a>
        </li>
      </ul>   

      <ul class="navbar-nav ml-auto">
        @if(Auth::user() && Auth::user()->role == 'admin')
        <li class="nav-item active">
          <a href="{{route('admin.index')}}" class="nav-link">Espace Admin</a>
        </li>
        @endif
        @if(Auth::user())
        <li class="nav-item active">
          <form action="{{route('logout')}}" method="post">
            @csrf
          <button type="submit" class="btn btn-danger">log out</button>
          </form>
        </li>
        @else
        <li class="nav-item active">
          <a class="nav-link" href="{{route('login')}}">Log in</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        @endif
      </ul>    
    </div>
  </nav>