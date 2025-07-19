<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Create Product</title>
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

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

     <div class="mb-3">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" name="name" class="form-control" placeholder="Product Name" required>

    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

      <div class="mb-3">
        <label for="sku" class="form-label">SKU</label>
        <input type="text" name="sku" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image (optional)</label>
        <input type="file" name="image" class="form-control">
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" class="form-select" required>
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select>
      </div>

      <button type="submit" class="btn btn-success">Save Product</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
