<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Passing arrays</title>
</head>

<body>

  <h1>Passing arrays</h1>

  @for ($index = 0; $index < count($numbers); $index++)
    <h2>Item {{ $index + 1 }}</h2>
    <p>{{ $numbers[$index] }}</p>
    @if ($index % 2 == 0)
    <p>This is an even index.</p>
    @else
    <p>This is an odd index.</p>
    @endif

  @endfor

  
</body>

</html>