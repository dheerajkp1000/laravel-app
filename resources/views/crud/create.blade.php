<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create simple Form</title>
</head>
<body>
    <h2>Create Simple Form</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('form.submit') }}" method="post">
        
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br><br>

        <label for="phone">Phone No.</label>
        <input type="number" name="phone" id="phone">
        <br><br>
        @error('phone')
        <span class="text-center">{{$message}}</span>
        @enderror

        <label for="status">Marital Status</label>
        <select name="status" id="status">
            <option value="">Please select marital status</option>
            <option value="married">Married</option>
            <option value="unmarried">Unmarried</option>
        </select>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
