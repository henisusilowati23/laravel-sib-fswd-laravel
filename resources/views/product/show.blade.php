@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Produk Detail
@endsection

@section('content')
  <main>

    <style>
      #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #198754;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 10px;
        font-size: 17px;
      }

      #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
      }
    </style>

    <section class="about" id="about" style="margin-top: 80px;">
      <h1 class="heading"> <span>Produk:</span> {{ $product->name }} </h1>
      <div class="row">

        <div class="video-container">
          @if (!empty($product->image))
            <img src="{{ url('storage/product/' . $product->image) }}" alt="" width="360" height="360">
          @else
            <img src="{{ asset('img/puk.jpg') }}" alt="" width="360" height="360">
          @endif
        </div>

        <div class="content" style="margin-right: 100px;">
          <div class="row" style="margin-bottom: -20px;">
            <div class="col-md-3">
              <h3>Deskripsi:</h3>
            </div>
            <div class="col-md-12">
              <span class="text-muted ms-5" style="font-size: 13px">{{ strip_tags($product->description) }}</span>
            </div>
          </div>
          <div class="row" style="margin-bottom: -20px;">
            <div class="col-md-3">
              <h3>Kategori:</h3>
            </div>
            <div class="col-md-3">
              <span class="fs-2 text-muted ms-5">{{ $product->category->name }}</span>
            </div>
          </div>
          <div class="row" style="margin-bottom: -20px;">
            <div class="col-md-3">
              <h3>Harga:</h3>
            </div>
            <div class="col-md-7">
              <span class="fs-2 text-muted ms-5">IDR. {{ number_format($product->price) }}</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <button class="btn btn-success btn-lg p-3 fs-4" onclick="myFunction()"> <svg
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path fill="currentColor"
                    d="m12 10l-1.4-1.4L12.175 7H8V5h4.175l-1.6-1.6L12 2l4 4l-4 4ZM7 22q-.825 0-1.413-.588T5 20q0-.825.588-1.413T7 18q.825 0 1.413.588T9 20q0 .825-.588 1.413T7 22Zm10 0q-.825 0-1.413-.588T15 20q0-.825.588-1.413T17 18q.825 0 1.413.588T19 20q0 .825-.588 1.413T17 22ZM1 4V2h3.275l4.25 9h7l3.9-7H21.7l-4.4 7.95q-.275.5-.738.775T15.55 13H8.1L7 15h12v2H7q-1.125 0-1.713-.975T5.25 14.05L6.6 11.6L3 4H1Z" />
                </svg> Beli Sekarang!</button>
              <div id="snackbar">Pesanan kamu berhasil diproses!</div>
              <script>
                function myFunction() {
                  var x = document.getElementById("snackbar");
                  x.className = "show";
                  setTimeout(function() {
                    x.className = x.className.replace("show", "");
                  }, 3000);
                }
              </script>
            </div>
            <div class="col-md-1" style="margin-right: -100px !important;">
              <a href="{{ route('landing') }}" class="btn btn-secondary btn-lg p-3 fs-4">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
