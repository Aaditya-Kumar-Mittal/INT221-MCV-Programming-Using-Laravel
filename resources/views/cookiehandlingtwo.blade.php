<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Cookie Handling in Laravel</h1>

  @if (session('message'))
    {
    <h3 style="color: red;">{{ session('message') }}</h3>
    }
  @endif

  <h2>Cookie Value : {{ $userId ?? "Cookie is not set." }}</h2>

  <a href="{{ route('cookie1.set') }}">Set Cookies</a>
  <br>
  <a href="{{ route('cookie1.update') }}">Update Cookies</a>
  <br>
  <a href="{{ route('cookie1.delete') }}">Delete Cookies</a>
</body>

</html>