<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
        }
    </style>
</head>
<body>

    <div class="container form-container">
        <div class="card shadow-lg rounded">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Simple Form</h4>
            </div>

            <div class="card-body">
                <a class="btn btn-sm btn-success mb-3" href="{{ route('employee.dashboard') }}">⬅ Back to Dashboard</a>

              
                <form action="{{ route('employee.create') }}" method="post">
                    @csrf

                

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                    </div>

@error('name')
    <span class="text-danger">{{$message }}</span>
@enderror

                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control" placeholder="Enter Designation" required>
                    </div>

                    <div class="mb-3">
                        <label for="department" class="form-label">Department</label>
                        <select name="department" id="department" class="form-select" required>
                            <option value="">-- Select Department --</option>
                            <option value="IT">IT</option>
                            <option value="Accounts">Accounts</option>
                            <option value="Sales">Sales</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">🚀 Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
