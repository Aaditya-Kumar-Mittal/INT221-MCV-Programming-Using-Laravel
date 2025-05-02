<!DOCTYPE html>
<html>

<head>
  <title>All Students</title>
</head>

<body>
  <h2>Students List</h2>
  <a href="/studentsdb/create">Add Student</a>
  <table border="1">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Age</th>
      <th>Actions</th>
    </tr>
    @foreach($students as $student)
    <tr>
      <td>{{ $student->name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->age }}</td>
      <td>
      <a href="/studentsdb/{{ $student->_id }}">View</a>
      <a href="/studentsdb/{{ $student->_id }}/edit">Edit</a>
      <form action="/studentsdb/{{ $student->_id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
      </td>
    </tr>
  @endforeach
  </table>
</body>

</html>