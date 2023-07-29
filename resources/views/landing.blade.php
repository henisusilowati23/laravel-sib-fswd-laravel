@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Landing Page
@endsection

@section('content')
  <main>

    <div class="container-fluid">
      <style>
        #image {
          filter: brightness(70%);
        }

        * {
          box-sizing: border-box;
        }

        body {
          font-family: Verdana, sans-serif;
        }

        .mySlides {
          display: none;
        }

        img {
          vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
          position: relative;
          margin: auto;
        }

        .title {
          color: #f2f2f2;
          font-size: 30px;
          padding: 8px 12px;
          position: absolute;
          bottom: 40px;
          width: 100%;
          text-align: center;
        }

        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 18px;
          width: 100%;
          text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }

        .active {
          background-color: #717171;
        }

        /* Fading animation */
        .fade {
          animation-name: fade;
          animation-duration: 1.5s;
        }

        @keyframes fade {
          from {
            opacity: .4
          }

          to {
            opacity: 1
          }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {
            font-size: 11px
          }
        }
      </style>
      <div class="slideshow-container">
        @foreach ($sliders as $item)
          <div class="mySlides fade">
            @if (!empty($item->image))
              <img src="{{ url('storage/slider/' . $item->image) }}" id="image" alt="Gambar" style="height: 630px;"
                class="d-block w-100" alt="...">
            @else
              <img src="{{ asset('img/visimisi.jpg') }}" id="image" style="height: 630px;" class="d-block w-100"
                alt="...">
            @endif
            <div class="title">{{ $item->title }}</div>
            <div class="text">{{ $item->caption }}</div>
          </div>
        @endforeach
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

      <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {
            slideIndex = 1
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
      </script>
    </div>

    <section class="about" id="about">
      <h1 class="heading"> <span>about</span> Us </h1>
      <div class="row">

        <div class="video-container">
          <video src="{{ asset('img/bumii.mp4') }}" loop autoplay muted></video>
        </div>

        <div class="content">
          <h3>why choose us?</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur
            adipisicing
            elit.
            Dolor perspiciatis totam unde vitae excepturi autem laborum accusantium Lorem ipsum dolor, sit amet
            consectetur adipisicing elit.
            quos alias necessitatibus blanditiis voluptate, inventore tempora cupiditate vel aut numquam perferendis
            culpa.lorem</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, nisi ex sapiente officia nostrum doloribus
            cupiditate quidem perferendis rem voluptatem blanditiis, consectetur consequatur omnis? Debitis, repellat
            eius? Aut, nihil excepturi?</p>
        </div>
      </div>
    </section>

    <section class="products" id="products">
      <h1 class="heading">latest<span>products</span></h1>
      <div class="box-container">
        @foreach ($products as $item)
          <div class="box">
            <div class="image">
              @if (!empty($item->image))
                <img src="{{ url('storage/product/' . $item->image) }}" alt="">
              @else
                <img src="{{ asset('img/puk.jpg') }}" alt="">
              @endif
              <div class="icons">
                <a href="{{ route('product.show', $item->id) }}" class="cart-btn"><svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-width="2"
                      d="M5 5h17l-2 9H7L4 2H0m7 12l1 4h13m-2 5a1 1 0 1 1 0-2a1 1 0 0 1 0 2ZM9 23a1 1 0 1 1 0-2a1 1 0 0 1 0 2Z" />
                  </svg> Checkout Now!</a>
                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                      </div>
                      <div class="modal-body">
                        <p>Some text in the modal.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="content">
              <h3>{{ $item->name }}</h3>
              <div class="price"> IDR. {{ number_format($item->price) }}</div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </main>
@endsection
