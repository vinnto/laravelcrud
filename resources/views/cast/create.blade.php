<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Cast</title>
</head>
<body>
    <h1>Create New Cast</h1>
    <form action="{{ route('cast.store') }}" method="POST">
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama"><br>
        <label for="umur">Umur:</label>
        <input type="text" id="umur" name="umur"><br>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio"></textarea><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
