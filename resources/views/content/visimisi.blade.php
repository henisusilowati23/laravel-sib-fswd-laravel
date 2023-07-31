@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Visi & Misi
@endsection

@section('content')
  <main style="margin-top: 80px;">
    <section class="about" id="about">
      <h1 class="heading"> Visi & Misi Perusahaan </h1>
      <div class="row">

        <div class="image">
          <img src="{{ asset('img/visimisi.jpg') }}" height="500" width="1150" alt="" srcset="">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 content" style="margin-top: -120px;">
          <h3>Visi Perusahaan</h3>
          <span class="fs-4 text-muted">1. LoreLorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum
            dolor, sit
            amet
            consectetur.</span>
        </div>
        <div class="col-md-6 content">
          <h3>Misi Perusahaan</h3>
          <span class="fs-4 text-muted">
            1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. <br>
            2. Dolor perspiciatis totam unde vitae excepturi autem laborum accusantium Lorem ipsum dolor, sit amet
            consectetur adipisicing elit. <br>
            3. Quos alias necessitatibus blanditiis voluptate, inventore tempora cupiditate. <br>
            4. vel aut numquam perferendis culpa.lorem</span>
        </div>
      </div>
    </section>
  </main>
@endsection
