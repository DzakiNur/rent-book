<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Books | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
</head>
<body>
    <div class="main d-flex flex-column justify-content-between">
        {{-- Navbar --}}
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand ms-3" href="#"><b>ReBooks</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        {{-- end Navbar --}}

        {{-- Sidebar --}}
        <div class="body-main h-100" style="background-color:#E5E0FF;">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    <a href="{{route('dashboard')}}" @if(request()->route()->uri == 'dashboard')class="active" @endif><i class="bi bi-house-door"></i>Dashboard</a>
                    <a href="{{route('users')}}" @if(request()->route()->uri == 'users')class="active" @endif><i class="bi bi-person"></i>Users</a>
                    <a href="{{route('books')}}" @if(request()->route()->uri == 'books')class="active" @endif><i class="bi bi-book"></i>Books</a>
                    <a href="{{route('categories')}}" @if(request()->route()->uri == 'categories')class="active" @endif><i class="bi bi-tags"></i>Categories</a>
                    <a href="{{route('rentLogs')}}" @if(request()->route()->uri == 'rent-logs')class="active" @endif><i class="bi bi-list-task"></i>Rent Logs</a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button  @if(request()->route()->uri == 'logout')class="active" @endif><i class="bi bi-box-arrow-left"></i>Logout</button>
                    </form>
                </div>
                <div class="content col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
        {{-- end Sidebar --}}
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>