@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Review
@endsection

@section('content')
  <main style="margin-top: 130px;">
    <div class="container">
      <div class="row justify-content-center">
        <h1 class="fw-bold text-center py-3 text-muted mb-3">Formulir Testimonial</h1>
        <div class="col-md-8" style="margin-bottom: 100px !important;">
          <div class="card" style="border-radius: 20px;">
            <div class="card-body">
              <form class="form-horizontal p-5" action="{{ route('review.store') }}" method="POST"
                style="margin-left: 120px;">
                @csrf
                <h2 class="mb-4">Formulir Testimoni</h2>
                <div class="form-group mb-4">
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" placeholder="Masukan nama lengkap Anda!"
                      name="name" required>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" placeholder="Masukan pekerjaan Anda!"
                      name="job" required>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <div class="col-sm-10">
                    <label for="select2Basic" class="form-label mt-3">Masukan Testimoni!</label>
                    <textarea class="ckeditor form-control" name="review" required></textarea>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <div class="col-sm-10">
                    <label class="form-label">Masukan Penilaian Anda!</label>
                    <select name="value" id="" class="form-control form-control-lg">
                      <option value="10">10</option>
                      <option value="20">20</option>
                      <option value="30">30</option>
                      <option value="40">40</option>
                      <option value="50">50</option>
                      <option value="60">60</option>
                      <option value="70">70</option>
                      <option value="80">80</option>
                      <option value="90">90</option>
                      <option value="100">100</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                  </div>
                </div>
              </form>

              <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
              <script type="text/javascript">
                $(document).ready(function() {
                  $('.ckeditor').ckeditor();
                });
              </script>

            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 mb-5" style="margin-bottom: 100px !important;">
        <h1 class="fw-bold text-center py-3 text-muted">Testimonial Pelanggan</h1>

        @foreach ($testimonis as $review)
          <div class="col-md-3 p-3">
            <div class="card p-3" style="border-radius: 10px;">
              <div class="card-body">
                <h3 class="card-title fw-semibold">{{ $review->name }}</h3>
                <p class="fs-5 text-muted">{{ $review->job }}</p>
                <p class="card-text fs-3 py-4">" {{ strip_tags($review->review) }} ".
                </p>
                <p class="fs-5 text-muted">Nilai {{ $review->value }}/100.</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection
