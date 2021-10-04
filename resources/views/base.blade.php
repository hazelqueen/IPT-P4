<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Online Book Club</title>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-gradient text-uppercase fixed-top" style="background-color: #e3f2fd;" id="mainNav">
    <div class="container-fluid">
            <a class="navbar-brand" href="/" style="font-weight: bold;">Online Book Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav mr-auto">
            <ul class="navbar-nav ms-auto">                      
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/">Home</a></li>
                    @if (!Auth::check())
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/login">Sign In</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/register">Sign Up</a></li>
                   @else 
                   <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/home">List</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="/logout">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if (session('Error')) 
            <div class="alert alert-danger">
                <div class="container">
                    {{session('Error') }}
                </div>
            </div>
      @endif  
      @if (session('Message'))
            <div class="alert alert-danger">
                <div class="container">
                    {{session('Message') }}
                </div>
            </div>
      @endif 
      @if(session('errors'))
            <div class="alert alert-danger">
                <div class="container">
                    Please fill up
                   <ul>
                       @foreach(session('errors')->all() as $error)
                       <li>{{$error}} </li>
                       @endforeach
                    </ul> 
                </div>
            </div>   
        @endif

    @yield('content')
</body>

</html>