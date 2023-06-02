@extends('layouts.main')

@section('content')

<main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Avatar</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <img src="https://placehold.co/50x50" alt="Avatar">
                                </td>
                                <td>Admin</td>
                                <td>admin@gmail.com</td>
                                <td>0857306444</td>
                                <td>Administrator</td>
                                <td>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                    <a class="btn btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</main>
@endsection