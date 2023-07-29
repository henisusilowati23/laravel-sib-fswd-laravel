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
      <h1 class="my-4">User</h1>

      <div class="card mb-4">
        <div class="card-body">
          <a href="{{ route('user.create') }}" class="btn btn-success mb-2">Create User</a>
          <table id="dataTable" class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Avatar</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    <img src="{{ asset('img/adminn.png') }}" alt="avatar" style="max-width: 50px">
                  </td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone }}</td>
                  <td>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                      <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure?')">Delete</button>
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
