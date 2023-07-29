<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
  <div class="sb-sidenav-menu"><br>
    <!-- <div class="sb-sidenav-menu-heading ps-3">
            <img src="{{ asset('img/adminn.png') }}" alt="avatar" style="max-width: 60px">
            {{ Auth::user()->name }}
        </div> -->
    <div class="nav">
      <div class="sb-sidenav-menu-heading">Core</div>
      <a class="nav-link" href="{{ route('dashboard') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
      </a>

      <div class="sb-sidenav-menu-heading">Content</div>
      <a class="nav-link" href="{{ route('slider.index') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
        Slider
      </a>

      <div class="sb-sidenav-menu-heading">Management</div>

      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
        aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Product
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
          {{-- <a class="nav-link" href="{{ route('brand.index') }}">Brand</a> --}}
          <a class="nav-link" href="{{ route('category.index') }}">Category</a>
          <a class="nav-link" href="{{ route('product.index') }}">Product</a>
        </nav>
      </div>

      <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
        aria-expanded="false" aria-controls="collapsePages">
        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
        User
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
      </a>
      <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
          <a class="nav-link" href="{{ route('user.index') }}">User</a>
        </nav>
      </div>

      <a class="nav-link" href="{{ route('about-company.index') }}">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        About Company
      </a>

      <li>
        <form action="{{ route('logout') }}" class="ms-3 mt-3" method="POST">
          @csrf
          <button type="submit" class="dropdown-item text-warning"> <i class="nav-icon fas fa-power-off"></i>
            Logout</button>
        </form>
      </li>
    </div>

  </div>
  <div class="sb-sidenav-footer bg-dark">
    <div class="small">Logged in as:</div>
    {{ Auth::user()->name }}
  </div>

</nav>
