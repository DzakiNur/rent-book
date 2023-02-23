<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/landing.css">
</head>
<body>
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

    {{-- carousel --}}
    <div id="carouselExampleInterval" class="carousel slide" style="max-height: 400px; max-width:100%" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/321605499_926154755464298_1580248403820813492_n.jpg?stp=cp6_dst-jpg_p843x403&_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=L_WY1GyvYMMAX_tfpjw&_nc_ht=scontent-cgk1-1.xx&oh=00_AfCcGuZPKBdXGAlUDe46A_gSmWej3wn-Jetp1v8Yo1axcg&oe=63D70398" 
            class="d-block w-100" alt="..." style="max-height: 400px; object-fit:cover;">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/325856848_1186200771998065_5763337130731642804_n.jpg?stp=cp6_dst-jpg_s1080x2048&_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=HGAKAwew7iUAX8ASaHY&_nc_ht=scontent-cgk1-1.xx&oh=00_AfDd5HeVXlToMbV-TIeMmRpf6iqVGVsnAVLAKKwh-07EVQ&oe=63D7AA3B" 
            class="d-block w-100" alt="..." style="max-height:400px; object-fit:cover;">
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="https://scontent-cgk1-1.xx.fbcdn.net/v/t39.30808-6/318770218_131985099697826_3275662959192336397_n.jpg?stp=cp6_dst-jpg&_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=Shw_ZkmLMTgAX9BmOeh&_nc_ht=scontent-cgk1-1.xx&oh=00_AfDZLxZmr_Fq18ewbegnymmhBT4W1o7NiLPfCKS-0K_n_A&oe=63D6B324" 
            class="d-block w-100" alt="..." style="max-height: 400px; object-fit:cover;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon " aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon " aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- end carousel --}}

      {{-- jumbotron --}}
      <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h2 class="mt-3">ReBook</h2>
                    <a href="{{route('register')}}" class="btn btn-outline-primary">Ayo Daftar Sekarang</a>
                </div>
                <div class="col-md-8 mb-3">
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae sapiente dolor soluta 
                        ducimus ab modi, enim corporis sint, non, vel inventore nesciunt. Expedita, totam hic? 
                        Voluptas animi consequatur voluptatem deleniti? Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Culpa quia voluptate tenetur assumenda ullam, ea sapiente minima maxime 
                        inventore repellendus error, facilis quasi eaque beatae excepturi itaque sequi quo sit?
                    </p>
                </div>
            </div>
        </div>
    </section>
      {{-- end jumbotron --}}

      {{-- card popular books --}}
      <section style="background-color: #A8D1D1; ">
        <div class="container">
            <div class="row text-center">
                <h2 class="text-light mt-5">Popular Books</h2>
            </div>
            <div class="row ms-5">
                <div class="col-lg-4 mb-3">
                    <div class="card my-5" style="width: 18rem;">
                        <img src="https://cdn.gramedia.com/uploads/items/9786020633176_.Atomic_Habit.jpg" 
                        class="card-img-top" alt="..." style="max-height:400px; object-fit:cover;">
                        <div class="card-body">
                          <h5 class="card-title">Atomic Habits</h5>
                          <p class="card-text">Self Improvement, Habits, Novel</p>
                          <a href="{{route('register')}}" class="btn btn-primary w-100">Read</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-5" style="width: 18rem;">
                        <img src="https://cdn.gramedia.com/uploads/items/ID_GPU2016MTH09DSPSHITB_C.jpg" 
                        class="card-img-top" alt="..." style="max-height:400px;">
                        <div class="card-body">
                          <h5 class="card-title">Sherlock Holmes</h5>
                          <p class="card-text">Mystery, Novel, Drama</p>
                          <a href="{{route('register')}}" class="btn btn-primary w-100">Read</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card my-5" style="width: 18rem;">
                        <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/1/11/cxwh8p6cjx8vpewbt2rppu.png" 
                        class="card-img-top" alt="..." style="max-height:400px;">
                        <div class="card-body">
                          <h5 class="card-title">Destination Jakarta 2040</h5>
                          <p class="card-text">Novel, Science Fiction</p>
                          <a href="{{route('register')}}" class="btn btn-primary w-100">Read</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
      {{-- end popular books --}}

      {{-- contact --}}
        <div class="container" id="contact">
            <div class="row text-center mt-5">
                <h2>Message</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form action="{{route('storeMessage')}}" method="post">
                      @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" class="form-control" name="nama" id="name">
                        </div>
                        <div class="mb-3">
                          <label for="message" class="form-label">Message</label>
                          <textarea name="message" class="form-control" id="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
      {{-- end contact --}}

      {{-- footer --}}
        <footer class=" text-center mt-5" style="height: 30px; background-color: #434242;">
            <p class="text-info">Created by <a href="https://www.facebook.com/dzaki.nurmuhammad.7" target="_blank" style="text-decoration:none; color:white;">Dzaki Nur Muhammad</a></p>
        </footer>
      {{-- end footer --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>