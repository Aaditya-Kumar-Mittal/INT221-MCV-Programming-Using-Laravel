<!DOCTYPE html>
<html>

<head>
  <title>Student Details</title>
</head>

<body>
  <h2>Student Details</h2>
  <p><strong>Name:</strong> {{ $student->name }}</p>
  <p><strong>Email:</strong> {{ $student->email }}</p>
  <p><strong>Age:</strong> {{ $student->age }}</p>
  <a href="/studentsdb">Back</a>
</body>

</html>