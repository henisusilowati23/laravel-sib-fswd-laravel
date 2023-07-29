@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Produk
@endsection

@section('content')
  <main style="margin-top: 80px;">
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
