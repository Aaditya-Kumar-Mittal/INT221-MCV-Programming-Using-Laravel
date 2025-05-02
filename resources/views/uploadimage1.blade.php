<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Upload Image</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @if(session('path'))
            <p>Image Path: {{ session('path') }}</p>
            <img src="{{ asset('storage/' . session('path')) }}" alt="Uploaded Image" class="img-fluid mt-3" width="300">
        @endif
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Choose Image</label>
            <input class="form-control" type="file" name="image" id="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
</body>
</html>