<!DOCTYPE html>
<html>

<head>
  <title>Cookie Handling</title>
</head>

<body>
  <h2>Cookie Handling in Laravel</h2>

  @if(session('message'))
    <p style="color: red;">{{ session('message') }}</p>
  @endif

  <p><strong>Current Cookie Value (user_id):</strong> {{ $userId ?? 'Not Set' }}</p>

  <a href="{{ route('cookie.set') }}">Set Cookie</a> |
  <a href="{{ route('cookie.update') }}">Update Cookie</a> |
  <a href="{{ route('cookie.delete') }}">Delete Cookie</a>
</body>

</html>