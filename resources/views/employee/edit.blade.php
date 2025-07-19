<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <form action="{{Route('employee.update',$employee->id)}}" method="post">
            <!-- <form action="{{ route('employee.update', $employee->id) }}" method="post"> -->
 
@csrf
@method("PUT")

                        <label for="name" class="form-label">Name</label>
<input type="text" class="form-control" name="name" id="name" value="{{old('name',$employee->name)}}">
@error('name')
<span class="text-danger">{{$message}}</span>
@enderror
  <label for="designation">Designation</label>
  <input type="text"name="designation" id="designation" class="form-control" value="{{old('designation',$employee->designation)}}">
    <div class="mb-3">

  <label for="department" class="form-label">Department</label>
  <Select name="department">
    <option value="IT"{{$employee->department=='IT'?'selected':''}}>IT</option>
    <option value="Accounts"{{$employee->department=='Accounts'?'selected':''}}>Accounts</option>
    <option value="Sales"{{$employee->department=='Sales'?'selected':''}}>Sales</option>
  </Select>
  </div>
  <div class="mb-3">
  <button type="submit">Update</button>
  </div>





    </form>
</body>
</html>