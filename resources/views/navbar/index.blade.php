<header>

  <style>
    a {
      text-decoration: none;
    }

    a:hover {
      color: black;
    }
  </style>
  <!-- <input type="checkbox" name="" id="toggler"> -->
  <label for="toggler" class="fas fa-bars"></label>

  <div class="row">
    <div class="col-md-2">
      <img src="{{ asset('img/logo.png') }}" width="50" alt="" srcset="">
    </div>
    <div class="col-md-9">
      <a href="#" class="logo text-uppercase" style="margin-left: -20px;">SumberBumi<span>ORGANIK</span></a>
    </div>
  </div>

  <nav class="navbar">
    <a href="{{ route('landing') }}">home</a>
    <a href="#about" data-bs-toggle="dropdown">about</a>
    <ul class="dropdown-menu mt-2 p-3" style="margin-left: 100px;">
      <li><a class="dropdown-item" href="{{ route('sejarah.index') }}">Sejarah</a></li>
      <li><a class="dropdown-item" href="{{ route('visi-misi.index') }}">Visi & Misi</a></li>
    </ul>
    <a href="{{ route('produk.index') }}">product</a>
    <a href="{{ route('review.index') }}">reviews</a>
    <a href="{{ route('contact.index') }}">contact</a>
  </nav>

  <div class="icons">
    {{-- <a href="#" class="fas fa-heart"></a>
    <a href="#" class="fas fa-shopping-cart"></a>
    <a href="{{ route('login') }}" class="fas fa-user"></a> --}}
    <a href="{{ route('login') }}" class="btn btn-lg btn-success text-white" style="font-size: 18px;"><svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M11 7L9.6 8.4l2.6 2.6H2v2h10.2l-2.6 2.6L11 17l5-5l-5-5m9 12h-8v2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-8v2h8v14Z" />
      </svg> Sign In</a>
  </div>
</header>
