<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Rekomendasi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('landing') }}">Beranda</a></li>
            <li><a href="{{ route('recommendation') }}">Rekomendasi</a></li>
        </ul>
    </nav>
    <main>
        @if(isset($result['error']))
            <p>{{ $result['error'] }}</p>
        @else
            <p>Rekomendasi Fakultas: {{ $result['fakultas'] }}</p>
        @endif
    </main>
</body>
</html>
