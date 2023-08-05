@extends('layouts.main')

@section('content')
  <main>
    <div class="container-fluid px-4">
      <h1 class="my-4">Edit Product</h1>

      <div class="card mb-4">
        <div class="card-body">
          <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-select" aria-label="category" id="category" name="category">
                <option selected disabled>- Choose Category -</option>
                @foreach ($categories as $cat)
                  <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" value="{{ $product->name }}" name="name"
                required>
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="ckeditor form-control" name="description" required>{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" value="{{ $product->price }}" name="price"
                required>
            </div>

            <div class="mb-3">
              <label for="image" class="form-label">Product Image</label>
              <input class="form-control" type="file" name="image" id="image" accept=".jpg, .jpeg, .png., .webp">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary">Cancel</button>
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
