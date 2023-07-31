@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Landing Page
@endsection

@section('content')
  <main>

    <div class="container-fluid">
      <style>
        .sliderbox {
          display: flex;
          position: relative;
          width: 300%;
          animation: 20s slidy infinite;
          overflow: hidden;
        }

        .sliderbox img {
          background-position: center;
          background-size: cover;
          width: 100%;
          filter: brightness(70%);
        }

        @keyframes slidy {
          0% {
            left: 0%;
          }

          20% {
            left: 0%;
          }

          25% {
            left: -100%;
          }

          45% {
            left: -100%;
          }

          50% {
            left: -200%;
          }

          70% {
            left: -200%;
          }

          75% {
            left: -300%;
          }

          80% {
            left: -300%;
          }

          100% {
            left: 0%;
          }
        }
      </style>

      <div class="sliderbox">
        @foreach ($sliders as $item)
          @if (!empty($item->image))
            <div class="div" style="width: 1390px;">
              <img src="{{ url('storage/slider/' . $item->image) }}" width="900" height="630" alt="">
              <h1 class="text-white text-center" style=" position: relative;bottom: 100px;">{{ $item->title }}
              </h1>
              <h3 class="text-white text-center" style=" position: relative;bottom: 90px;">{{ $item->caption }}
              </h3>
            </div>
          @else
            <img src="{{ asset('img/visimisi.jpg') }}" width="900" height="630" alt="">
          @endif
          {{-- <div class="title">{{ $item->title }}</div>
          <div class="text">{{ $item->caption }}</div> --}}
        @endforeach
      </div>
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
