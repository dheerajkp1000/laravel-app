<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 16px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
    }
    .product-img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="card p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">📦 Product Dashboard</h2>
        <a href="/products/create" class="btn btn-success">
          <i class="fa fa-plus me-1"></i> Add Product
        </a>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle text-center" id="table1">
          <thead class="table-dark">
            <tr>
              <th>#ID</th>
              <th>Name</th>
              <th>SKU</th>
              <th>Price</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($products as $product)
              <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->sku }}</td>
                <td>₹{{ $product->price }}</td>
                <td>
                  @if ($product->image)
                    <img src="{{ asset('images/' . $product->image) }}" alt="Product Image" class="product-img">
                  @else
                    <span class="text-muted">N/A</span>
                  @endif
                </td>
                <td>
                  @if ($product->status === 'Active')
                    <span class="badge bg-success">Active</span>
                  @else
                    <span class="badge bg-secondary">Inactive</span>
                  @endif
                </td>
                <td>
                  <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm me-1">
                    <i class="fa fa-edit"></i>
                  </a>
                  <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure you want to delete this product?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                      <i class="fa fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="text-muted">No products found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    
  </script>
</body>
</html>
