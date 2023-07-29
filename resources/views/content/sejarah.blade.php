@extends('layouts.master')

@section('title')
  Sumberbumiorganik - Sejarah
@endsection

@section('content')
  <main style="margin-top: 80px;">
    <section class="about" id="about">
      <h1 class="heading"> Sejarah Perusahaan </h1>
      <div class="row">

        <div class="video-container">
          <video src="{{ asset('img/bumi.mp4') }}" loop autoplay muted></video>
        </div>

        <div class="content">
          @foreach ($abouts as $item)
            <h3>{{ $item->title }}</h3>
            <span class="fs-5">Created by: {{ $item->users->name }}, Published at:
              {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}.</span>
            <span>{!! $item->content !!}</span>
          @endforeach
        </div>
      </div>
    </section>
  </main>
@endsection
