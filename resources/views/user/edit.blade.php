@extends('layouts.main')

@section('content')
  <main>
    <div class="container-fluid px-4">
      <h1 class="my-4">Edit User</h1>

      <div class="card mb-4">
        <div class="card-body">
          <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" value="{{ $user->name }}" name="name"
                required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" value="{{ $user->password }}" name="password">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" value="{{ $user->email }}" name="email"
                required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" value="{{ $user->phone }}" name="phone"
                required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection
