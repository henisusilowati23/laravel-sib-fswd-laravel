@extends('layouts.main')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<main>
                    <div class="container-fluid px-4">
                        <h1 class="my-4">Product</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                            <a class="btn btn-success mb-2" href="{{ route('product.create') }}" role="button">Create New</a>
                                <table id="dataTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Category</th>
                                            <th>Nama</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Sale Price</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->description }}</td>
                                                <td>Rp. {{ number_format($product->price, 0,2) }}</td>
                                                <td>Rp. {{ number_format($product->sale_price, 0,2) }}</td>
                                                <td>
                                                    @if ($product->image == null)
                                                        <span class="badge bg-success">No Image</span>
                                                    @else
                                                    <img src="{{ asset('storage/product/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 50px">
                                                    @endif
                                                </td>
                                                <td>
                                                    <form onsubmit="return confirm('Are you sure? ');" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                                        <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
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