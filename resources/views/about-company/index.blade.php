@extends('layouts.main')

@section('content')
  <main>
    <style>
      .dataTables_length {
        display: none;
      }

      .dataTables_filter {
        display: none;
      }
    </style>
    <div class="container-fluid px-4">
      <h1 class="my-4">About Company</h1>

      <div class="card mb-4">
        <div class="card-body">
          <a class="btn btn-success mb-2" href="{{ route('about-company.create') }}" role="button">Create New</a>
          <table id="dataTable" class="table table-striped mt-5">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Konten</th>
                <th>Publish Pada</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($abouts as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->title }}</td>
                  <td>{{ $item->users->name }}</td>
                  <td>{!! \Illuminate\Support\Str::limit($item->content, 100, $end = '...') !!}</td>
                  <td>{{ \Carbon\Carbon::parse($item->created_at)->toFormattedDateString() }}</td>
                  <td>
                    <form onsubmit="return confirm('Are you sure? ');"
                      action="{{ route('about-company.destroy', $item->id) }}" method="POST">
                      <a href="{{ route('about-company.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                      @csrf
                      @method('DELETE')

                      <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
@endsection
