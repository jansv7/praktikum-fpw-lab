<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Akses Ditolak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="div m-2 p-3">
    <h1>403 - Akses Ditolak</h1>

    <p>
        Anda tidak memiliki izin untuk mengakses halaman ini.
    </p>

    <a href="{{ url('/pos') }}">
        Kembali ke POS
    </a>
</body>
</html>