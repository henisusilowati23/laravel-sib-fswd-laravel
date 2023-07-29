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

        <div class="content mt-3">
          <h3>Visi Perusahaan</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur
            adipisicing
            elit.
            Dolor perspiciatis totam unde vitae excepturi autem laborum accusantium Lorem ipsum dolor, sit amet
            consectetur adipisicing elit.
            quos alias necessitatibus blanditiis voluptate, inventore tempora cupiditate vel aut numquam perferendis
            culpa.lorem</p>
        </div>
        <div class="content mt-3">
          <h3>Misi Perusahaan</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur
            adipisicing
            elit.
            Dolor perspiciatis totam unde vitae excepturi autem laborum accusantium Lorem ipsum dolor, sit amet
            consectetur adipisicing elit.
            quos alias necessitatibus blanditiis voluptate, inventore tempora cupiditate vel aut numquam perferendis
            culpa.lorem</p>
        </div>
      </div>
    </section>
  </main>
@endsection
