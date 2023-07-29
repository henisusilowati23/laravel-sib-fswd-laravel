@extends('layouts.main')

@section('content')
  <main>
    <div class="container-fluid px-4">
      <h1 class="my-4">Create About Company</h1>

      <div class="card mb-4">
        <div class="card-body">

          <form action="{{ route('about-company.store') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Sejarah Perusahaan.."
                required>
            </div>
            <div class="mb-3">
              <label for="select2Basic" class="form-label mt-3">Isi Konten</label>
              <textarea class="ckeditor form-control" name="content" required></textarea>
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
