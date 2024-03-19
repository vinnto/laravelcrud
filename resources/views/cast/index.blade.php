<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Casts</title>
</head>
<body>
    <h1>List of Casts</h1>
    <a href="{{ route('cast.create') }}">Add New Cast</a>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Umur</th>
                <th>Bio</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($casts as $cast)
                <tr>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>{{ $cast->bio }}</td>
                    <td>
                        <a href="{{ route('cast.show', $cast->id) }}">View</a>
                        <a href="{{ route('cast.edit', $cast->id) }}">Edit</a>
                        <form action="{{ route('cast.destroy', $cast->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
