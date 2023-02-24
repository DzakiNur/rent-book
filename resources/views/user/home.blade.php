<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <h1>Hallo selamat datang di Rent Books</h1>

    {{-- navbar --}}
    <nav class="navbar navbar-dark navbar-expand-lg bg-info">
        <div class="container">
            <a class="navbar-brand text-bold" href="#">
                <img src="assets/images/navbar-icon.png" alt="ReBook" width="40" height="30">
                <b>ReBook</b>
            </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contact"><i class="bi bi-person-lines-fill"></i> Contact</a>
                </li>
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, {{Auth::user()->username}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/home"><i class="bi bi-house-door"></i> Home</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                  <a class="nav-link active" href="{{route('login')}}"><i class="bi bi-box-arrow-right"></i> Login</a>
                </li>
            @endauth
                <!-- <li class="nav-iten">
                    <label for="">
                    <input type="checkbox">
                    <span class="check"></span>
                    </label>
                </li> -->
            </ul>
          </div>
        </div>
    </nav>
    {{-- end navbar --}}



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>