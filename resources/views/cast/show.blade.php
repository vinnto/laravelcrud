<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Cast</title>
</head>
<body>
    <h1>Cast Detail</h1>
    <p><strong>Name:</strong> {{ $cast->name }}</p>
    <p><strong>umur:</strong> {{ $cast->umur }}</p>
    <p><strong>Bio:</strong> {{ $cast->bio }}</p>
    <a href="{{ route('cast.index') }}">Back to List</a>
</body>
</html>
