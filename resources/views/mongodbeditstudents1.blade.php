<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="/studentsdb/{{ $student->_id }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="{{ $student->email }}" required><br>
        <label>Age:</label>
        <input type="number" name="age" value="{{ $student->age }}" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
