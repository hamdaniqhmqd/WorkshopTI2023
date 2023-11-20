<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>DATA MAHASISWA</h1>
    @foreach ($mahasiswa as $mahasiswa)
        <h2>{{ $mahasiswa->name }}</h2>
        <p>{{ $mahasiswa->NIM }}</p>
    @endforeach
</body>

</html>
