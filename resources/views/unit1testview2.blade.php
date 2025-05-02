<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test View 2</title>
</head>

<body>
  <h1>We are sharing data between views</h1>
  <h1>User Name 2 : {{ $name }}</h1>
  <h1>User age 2 : {{ $age }}</h1>
  <a href="{{ route("about") }}">About</a>
</body>

</html>