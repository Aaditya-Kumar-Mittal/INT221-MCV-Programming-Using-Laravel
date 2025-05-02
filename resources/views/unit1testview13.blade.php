<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pass</title>
</head>

<body>

    <h1>Marks : {{ $marks }}</h1>

    @if ($marks >= 90)
        <h2>Grade : A</h2>
    @elseif ($marks >= 80 && $marks < 90)
        <h2>Grade: B</h2>
    @elseif ($marks >= 70 && $marks < 80)
        <h2>Grade: C</h2>
    @elseif ($marks >= 60 && $marks < 70)
        <h2>Grade: D
        </h2>
    @elseif ($marks >= 50 && $marks < 60)
        <h2>Grade: E</h2>
    @else
        <h2>Grade: F</h2>
    @endif
</body>

</html>