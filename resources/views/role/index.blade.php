@extends('layouts.main')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Role</h1>
        <div class="card mb-4">
            <div class="card-body">
            <a href="{{ route('role.create') }}" class="btn btn-success mb-2">Create New</a>
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger">Delete</button>
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