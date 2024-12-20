<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Fakultas</title>
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
        <h1>Rekomendasi Fakultas</h1>
        <form method="POST" action="{{ route('get-recommendation') }}">
            @csrf
            <label for="minat">Minat:</label>
            <select name="minat" id="minat">
                <option value="kedokteran">Kedokteran</option>
                <option value="teknik">Teknik</option>
                <option value="ekonomi">Ekonomi</option>
                <option value="hukum">Hukum</option>
            </select>

            <label for="nilai">Nilai:</label>
            <input type="number" name="nilai" id="nilai" required>

            <label for="skill">Keahlian:</label>
            <input type="text" name="skill[]" placeholder="Masukkan skill, pisahkan dengan koma" required>

            <label for="kepribadian">Kepribadian:</label>
            <input type="text" name="kepribadian[]" placeholder="Masukkan kepribadian, pisahkan dengan koma" required>

            <button type="submit">Dapatkan Rekomendasi</button>
        </form>
    </main>
</body>
</html>
