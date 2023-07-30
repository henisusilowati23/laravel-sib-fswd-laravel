<style>
  .site-footer {
    background-color: #26272b;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
  }

  .site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5
  }

  .site-footer hr.small {
    margin: 20px 0
  }

  .site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px
  }

  .site-footer a {
    color: #737373;
  }

  .site-footer a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links {
    padding-left: 0;
    list-style: none
  }

  .footer-links li {
    display: block
  }

  .footer-links a {
    color: #737373
  }

  .footer-links a:active,
  .footer-links a:focus,
  .footer-links a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links.inline li {
    display: inline-block
  }

  .site-footer .social-icons {
    text-align: right
  }

  .site-footer .social-icons a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-left: 6px;
    margin-right: 0;
    border-radius: 100%;
    background-color: #33353d
  }

  .copyright-text {
    margin: 0
  }

  @media (max-width:991px) {
    .site-footer [class^=col-] {
      margin-bottom: 30px
    }
  }

  @media (max-width:767px) {
    .site-footer {
      padding-bottom: 0
    }

    .site-footer .copyright-text,
    .site-footer .social-icons {
      text-align: center
    }
  }

  .social-icons {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
  }

  .social-icons li {
    display: inline-block;
    margin-bottom: 4px
  }

  .social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
    font-weight: 700;
    font-size: 13px
  }

  .social-icons a {
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    line-height: 44px;
    width: 44px;
    height: 44px;
    text-align: center;
    margin-right: 8px;
    border-radius: 100%;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear
  }

  .social-icons a:active,
  .social-icons a:focus,
  .social-icons a:hover {
    color: #fff;
    background-color: #29aafe
  }

  .social-icons.size-sm a {
    line-height: 34px;
    height: 34px;
    width: 34px;
    font-size: 14px
  }

  .social-icons a.facebook:hover {
    background-color: #3b5998
  }

  .social-icons a.twitter:hover {
    background-color: #00aced
  }

  .social-icons a.linkedin:hover {
    background-color: #007bb6
  }

  .social-icons a.dribbble:hover {
    background-color: #ea4c89
  }

  @media (max-width:767px) {
    .social-icons li.title {
      display: block;
      margin-right: 0;
      font-weight: 600
    }
  }
</style>
<!-- Site footer -->
<footer class="site-footer mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>About Company</h6>
        <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming
          programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code
          wants to be simple. We will help programmers build up concepts in different programming languages that
          include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
      </div>

      <div class="col-xs-6 col-md-2">
        <h6>Pages</h6>
        <ul class="footer-links">
          <li><a href="{{ route('landing') }}">Home</a></li>
          <li><a href="{{ route('sejarah.index') }}">Sejarah</a></li>
          <li><a href="{{ route('visi-misi.index') }}">Visi & Misi</a></li>
          <li><a href="{{ route('produk.index') }}">Produk</a></li>
          <li><a href="{{ route('review.index') }}">Review</a></li>
          <li><a href="{{ route('contact.index') }}">Contact</a></li>
        </ul>
      </div>

      <div class="col-xs-6 col-md-4">
        <h6>Our Contact</h6>
        <ul class="footer-links">
          <li>Phone: <a href="http://wa.me/6285730642909">+6285730642909</a></li>
          <li>Email: <a href="#">henisusilowati2301@gmail.com</a></li>
          <li>Website: <a href="http://www.sumberbumiorganik.com/">www.sumberbumiorganik.com</a></li>
          <li>Location: <br> Jl. Kemuningsarilor Sumberduren, RT.05/RW.03,
            Krajan, Glagahwero, Panti, Kabupaten Jember, Jawa Timur 68153, Indonesia</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; {{ \Carbon\Carbon::now()->format('Y') }} All Rights Reserved by
          <a href="#">Sumber Bumi Organik</a>.
        </p>
      </div>

      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100057408640902"><i
                class="fa-brands fa-facebook-f fa-lg"></i></a></li>
          <li><a class="twitter" href="#"><i class="fa-brands fa-twitter fa-lg"></i></i></a></li>
          <li><a class="dribbble" href="#"><i class="fa-brands fa-instagram fa-lg"></i></a></li>
          <li><a class="linkedin" href="#"><i class="fa-brands fa-youtube fa-lg"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
