<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/stylehome.css') }}" rel="stylesheet" />

    <title>sumber bumi organik</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logo.png') }}" alt="" width="50" height="50" class="me-2">
      Sumber Bumi<strong> Organik</strong>
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto me-5">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#katalog">Katalog</a>
            </li>
            <!-- <a class="btn btn-outline-light" role="button" href="#">
                <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-light text-dark ms-1 rounded-pill">0</span>
            </a> -->
            @auth
            <a href="{{ route('dashboard') }}" class="btn btn-outline-light ms-1">
                <i class="bi-person-fill me-1"></i>
                    Dashboard
            </a>
            @endauth

             @guest
             <a href="{{ route('login') }}" class="btn btn-outline-light ms-1">
                <i class="bi-person-fill me-1"></i>
                     Login
            </a>
            @endguest
        </ul>
        </div>
    </div>
    </nav>
    <!-- Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($sliders as $slider)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->first ? 'active' : '' }}"
                        aria-current="{{ $loop->first ? 'true' : '' }}" aria-label="Slide 1"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="3000">
                        <img src="{{ asset('storage/slider/' . $slider->image) }}" class="d-block w-100" alt="{{ $slider->image }}">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>{{ $slider->title }}</h1>
                            <p>{{ $slider->caption }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
   

     <!-- Section-->
     <section class="py-5" id="katalog">
        <div class="container px-4 px-lg-5 mt-5">
            <form action="{{ route('landing') }}" method="GET">
                @csrf 
                <div class="row g-3 my-5">
                    <h1>Produk Kami</h1>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Min" name="min" value="{{ old('min') }}">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Max" name="max" value={{ old('max') }}>
                    </div> 
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-dark">Terapkan</button>
                    </div> 
                </div>
            </form>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center row-container">

                @forelse ($products as $product)
                    <div class="col mb-5 mt-3">
                        <div class="card h-70 mt-3">
                            @if ($product['sale_price'] != 0)
                                <!-- Sale badge -->
                                <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            @endif

                            <!-- Product image -->
                            <img class="card-img-top" src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" />

                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a href="{{ route('product.show', ['id' => $product->id]) }}" style="text-decoration: none" class="text-dark">
                                        <small class="text-strong">{{ $product->category->name }}</small>
                                        <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    </a>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        @for ($i = 0; $i < $product->rating; $i++)
                                            <div class="bi-star-fill"></div>
                                        @endfor
                                    </div>
                                    <!-- Product price-->
                                    @if ($product['sale_price'] != 0)
                                        <span class="text-muted text-decoration-line-through">Rp.{{ number_format($product->price, 0) }}</span>
                                        Rp.{{ number_format($product->sale_price, 0) }}
                                    @else
                                        Rp.{{ number_format($product->price, 0) }}
                                    @endif
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-light bg-success  mt-auto" href="{{ route('product.show', ['id' => $product->id]) }}">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-secondary w-100 text-center" role="alert">
                        <h4>Produk belum tersedia</h4>
                    </div>
                @endforelse
            </div>
        </div>
        
    </section>
    <!-- section -->

    <!-- footer -->
    <footer class="py-5 bg-light">
    <div class="container">
       <p align="center"> 
        <a href="" class="text-decoration-none">
        <img src="{{ asset('img/logo.png') }}" style="width: 50px;">
        </a>
        <span>Copyright @2023 | Created and Developed by <a href="https://instagram.com/henisusilowati__?igshid=NGExMmI2YTkyZg==" 
        class="text-decoration-none text-dark fw-bold">Heni Susilowati</a></span>
        </p> 
    </div>
    </footer>
    <!-- <footer class=" py-5 bg-light mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="" class="text-decoration-none">
                    <img src="{{ asset('img/logo.png') }}" style="width: 50px;">
                    </a>
                    <span>Copyright @2023 | Created and Developed by <a href="https://instagram.com/henisusilowati__?igshid=NGExMmI2YTkyZg==" 
                    class="text-decoration-none text-dark fw-bold">Heni Susilowati</a></span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="" class="text-decoration-none">
                    <img src="{{ asset('img/fb.png') }}" class="ms-2" style="width: 79px;">
                    </a>
                    <a href="" class="text-decoration-none">
                    <img src="{{ asset('img/ig.png') }}" class="ms-2" style="width: 55px;">
                    </a>
                    <a href="" class="text-decoration-none">
                    <img src="{{ asset('img/twitt.png') }}" class="ms-2" style="width: 58px;">
                    </a>
                    <a href="" class="text-decoration-none">
                    <img src="{{ asset('img/tele.png') }}" class="ms-2" style="width: 80px;">
                    </a>
                </div>
            </div>
        </div>
    </footer> -->

    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    {{-- <script src="js/scripts.js"></script> --}}
</body>
</html>
