<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Add New Product</h2>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">← Back to Dashboard</a>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops!</strong> Please fix the following errors:<br><br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

     <div class="mb-3">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" placeholder="Product Name" value="{{ old('name', $product->name) }}" required>
</div>

      <div class="mb-3">
        <label for="sku" class="form-label">SKU</label>
        <input type="text" value="{{old('sku', $product->sku)}}" name="sku" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{old('price', $product->price)}}" required>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image (optional)</label>
        <input type="file" name="image" class="form-control" >
        <img src="{{asset('images/' . $product->image) }}"width="150">
      </div>

      <div class="mb-3">
  <label for="status" class="form-label">Status</label>
  <select name="status" class="form-select" required>
    <option value="Active" {{ old('status', $product->status) == 'Active' ? 'selected' : '' }}>Active</option>
    <option value="Inactive" {{ old('status', $product->status) == 'Inactive' ? 'selected' : '' }}>Inactive</option>
  </select>
</div>

      <button type="submit" class="btn btn-success">Update Product</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
