@extends('layouts.main')

@section('content')
  <main>
    <div class="container-fluid px-4">
      <h1 class="my-4">Edit About Company</h1>

      <div class="card mb-4">
        <div class="card-body">

          <form action="{{ route('about-company.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control" id="title" value="{{ $item->title }}" name="title">
            </div>
            <div class="mb-3">
              <label for="select2Basic" class="form-label mt-3">Isi Konten</label>
              <textarea class="ckeditor form-control" name="content">{!! $item->content !!}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('about-company.index') }}" class="btn btn-secondary">Cancel</a>
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
  </main>
@endsection
