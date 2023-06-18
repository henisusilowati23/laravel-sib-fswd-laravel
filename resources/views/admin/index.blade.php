@extends('layouts.main')

@section('content')

<main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Slider staff</h1>
            <div class="card mb-4">
                <div class="card-body">
                <a class="btn btn-success mb-2" href="{{ route('admin.create') }}" role="button">Create New</a>
                    <table id="dataTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->caption }}</td>
                                    <td>
                                        <img src="{{ asset('storage/slider/' . $slider->image) }}" class="img-fluid" style="max-width: 100px;"
                                            alt="{{ $slider->image }}">
                                    </td>
                                    <td>{{ $slider->status }}</td> 
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');" action="{{ route('admin.destroy', $slider->id) }}" method="POST">
                                            <a href="{{ route('admin.status', $slider->id) }}" class="btn btn-sm btn-warning">Detail Status</a>
                                            @csrf
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

