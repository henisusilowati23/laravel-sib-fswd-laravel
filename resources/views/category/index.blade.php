@extends('layouts.main')

@section('content')
  <main>
    <style>
      .dataTables_length {
        display: none;
      }

      /* .dataTables_filter {
            display: none;
          } */
    </style>
    <div class="container-fluid px-4">
      <h1 class="my-4">Category</h1>

      <div class="card mb-4">
        <div class="card-body">
          <a class="btn btn-success mb-2" href="{{ route('category.create') }}" role="button">Create New</a>
          <table id="dataTable" class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $category['name'] }}</td>
                  <td>
                    <form onsubmit="return confirm('Are you sure? ');"
                      action="{{ route('category.destroy', $category->id) }}" method="POST">
                      <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-warning">Edit</a>
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
