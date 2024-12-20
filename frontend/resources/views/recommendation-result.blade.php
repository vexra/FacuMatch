<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Hasil Rekomendasi Fakultas</h1>
    @if(isset($result['error']))
        <p>Error: {{ $result['error'] }}</p>
    @else
        <p>Fakultas yang direkomendasikan: {{ $result['fakultas'] }}</p>
    @endif
    <a href="{{ route('recommendation') }}">Kembali</a>
</body>
</html>
