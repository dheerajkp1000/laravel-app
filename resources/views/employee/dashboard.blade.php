<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <a class="btn btn-success" style="float:inline-end;" href="{{Route('employee.create') }}">ADD</a>

    <h3 class="text-center">form data</h3>
     @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

    <table class="table table-stiped table-bordered">

        <thead class="text-center">
            <tr>
            <th>id</th>
            <th>name</th>
            <th>designation</th>
            <th>department</th>
            <th>action</th>
            </tr>
        </thead>
<tbody class="text-center">
    @forelse($employees as $key => $emp)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $emp->name }}</td>
            <td>{{ $emp->designation }}</td>
            <td>{{ $emp->department }}</td>
<td> <a class="btn btn-secondary" href="{{ route('employee.edit', $emp->id) }}">Edit</a>
<a class="btn btn-danger" href="{{ route('employee.delete', $emp->id) }}">Delete</a></td>

        </tr>
    @empty
        <tr>
            <td colspan="4" style="text-align: center;">No Employees Found</td>
        </tr>
    @endforelse
</tbody>

    </table>
    
</body>
</html>