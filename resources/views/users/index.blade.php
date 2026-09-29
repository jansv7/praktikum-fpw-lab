<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelola Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="div m-3 p-3">
    <h1>Kelola Akun Kasir</h1>

    <p>Selamat datang, {{ auth()->user()->name }}</p>
    <table class="table w-50">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user -> name}}</td>
            <td>{{$user -> email}}</td>
            <td>{{$user -> role}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

    <br>

    <a href="{{ route('dashboard') }}">Kembali ke Dashboard</a>
</div>
</body>
</html>