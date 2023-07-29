@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Contact Us
@endsection

@section('content')
  <main style="margin-top: 80px;">
    <section class="about" id="about">
      <h1 class="heading"> <span>contact</span> Us </h1>
      <div class="row">

        <div class="video-container">
          <img src="{{ asset('img/telpon.jpg') }}" style="border-radius: 20px;" width="500" height="350" alt="">
        </div>

        <div class="content">
          <div class="row" style="margin-bottom: -20px;">
            <div class="col-md-5">
              <h3>Nomor Telpon:</h3>
            </div>
            <div class="col-md-5">
              <span class="fs-2 text-muted ms-5">+62 8573 0642 909</span>
            </div>
          </div>
          <div class="row" style="margin-bottom: -20px;">
            <div class="col-md-5">
              <h3>Email:</h3>
            </div>
            <div class="col-md-3">
              <span class="fs-2 text-muted ms-5 text-lowercase">henisusilowati2301@gmail.com</span>
            </div>
          </div>
          <div class="row" style="margin-bottom: -20px;">
            <div class="col-md-5">
              <h3>Website:</h3>
            </div>
            <div class="col-md-3">
              <span class="fs-2 text-muted ms-5 text-lowercase">www.sumberbumiorganik.com</span>
            </div>
          </div>
          <div class="row" style="margin-bottom: -20px;">
            <div class="col-md-5">
              <h3>Alamat:</h3>
            </div>
            <div class="col-md-5">
              <span class="fs-2 text-muted ms-5">Kota Jember</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
