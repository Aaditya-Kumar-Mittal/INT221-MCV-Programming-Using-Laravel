<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Displaying array elements</h1>
    @foreach ($colors as $color)
        <h2>{{ $color }}</h2>
    @endforeach
</body>

</html>