<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($cast) ? 'Edit Cast' : 'Add New Cast' }}</title>
</head>

<body>
    <h1>{{ isset($cast) ? 'Edit Cast' : 'Add New Cast' }}</h1>
    <form action="{{ isset($cast) ? route('cast.update', $cast->id) : route('cast.store') }}" method="POST">
        @csrf
        @if (isset($cast))
            @method('PUT')
        @endif
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="{{ isset($cast) ? $cast->nama : '' }}"><br>
        <label for="umur">Umur:</label>
        <input type="text" id="umur" name="umur" value="{{ isset($cast) ? $cast->umur : '' }}"><br>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio">{{ isset($cast) ? $cast->bio : '' }}</textarea><br>
        <button type="submit">{{ isset($cast) ? 'Update' : 'Save' }}</button>
    </form>
</body>

</html>
