<!DOCTYPE html>
<html>

<head>
  <title>Add Student</title>
</head>

<body>
  <h2>Add Student</h2>
  <form action="/studentsdb" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required><br>
    <label>Email:</label>
    <input type="email" name="email" required><br>
    <label>Age:</label>
    <input type="number" name="age" required><br>
    <button type="submit">Save</button>
  </form>
</body>

</html